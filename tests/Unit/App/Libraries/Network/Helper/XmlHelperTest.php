<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Helper;

use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Helper\XmlHelper;
use SimpleXMLElement;

use function simplexml_load_string;

final class XmlHelperTest extends TestCase
{
    /**
     * @dataProvider validXmlToArrayDataProvider
     */
    public function testXmlToArrayValid(string|SimpleXMLElement $input, array|string $expected): void
    {
        $result = XmlHelper::xmlToArray($input);

        $this->assertSame($expected, $result);
    }

    public static function validXmlToArrayDataProvider(): array
    {
        return [
            'simple element with attribute' => [
                'input' => '<status state="up"/>',
                'expected' => [
                    'state' => 'up',
                ],
            ],
            'nested elements' => [
                'input' => '<host><status state="up"/></host>',
                'expected' => [
                    'status' => [
                        'state' => 'up',
                    ],
                ],
            ],
            'repeated elements become list' => [
                'input' => '<root><port id="1"/><port id="2"/></root>',
                'expected' => [
                    'port' => [
                        ['id' => '1'],
                        ['id' => '2'],
                    ],
                ],
            ],
            'text only node' => [
                'input' => '<tag>value</tag>',
                'expected' => 'value',
            ],
            'text with attributes' => [
                'input' => '<tag attr="1">value</tag>',
                'expected' => [
                    'attr' => '1',
                    '_value' => 'value',
                ],
            ],
            'mixed children and text' => [
                'input' => '<root attr="a"><child>value</child>text</root>',
                'expected' => [
                    'attr' => 'a',
                    'child' => 'value',
                    '_value' => 'text',
                ],
            ],
            'nmap-like structure' => [
                'input' => '
                    <nmaprun>
                        <host>
                            <status state="up" reason="syn-ack"/>
                        </host>
                        <host>
                            <status state="down" reason="timeout"/>
                        </host>
                    </nmaprun>
                ',
                'expected' => [
                    'host' => [
                        [
                            'status' => [
                                'state' => 'up',
                                'reason' => 'syn-ack',
                            ],
                        ],
                        [
                            'status' => [
                                'state' => 'down',
                                'reason' => 'timeout',
                            ],
                        ],
                    ],
                ],
            ],
            'SimpleXMLElement input' => [
                'input' => simplexml_load_string('<tag attr="1">value</tag>'),
                'expected' => [
                    'attr' => '1',
                    '_value' => 'value',
                ],
            ],
        ];
    }

    /**
     * @dataProvider invalidXmlToArrayDataProvider
     */
    public function testInvalidXmlReturnsEmptyArray(string $input): void
    {
        $result = XmlHelper::xmlToArray($input);

        $this->assertSame([], $result);
    }

    public static function invalidXmlToArrayDataProvider(): array
    {
        return [
            'malformed xml' => [
                'input' => '<tag><unclosed></tag>',
            ],
            'empty string' => [
                'input' => '',
            ],
            'invalid content' => [
                'input' => 'not actually xml',
            ],
        ];
    }

    public function testParsingNmapOutput(): void
    {
        $input = <<<XML
    <host starttime="1778043060" endtime="1778043060">
        <status state="up" reason="syn-ack" reason_ttl="0"/>
        <address addr="172.80.1.12" addrtype="ipv4"/>
        <hostnames>
            <hostname name="open-audit-target" type="PTR"/>
        </hostnames>
        <ports>
            <port protocol="tcp" portid="22">
                <state state="open" reason="syn-ack" reason_ttl="0"/>
                <service name="ssh" method="table" conf="3"/>
            </port>
            <port protocol="tcp" portid="135">
                <state state="closed" reason="conn-refused" reason_ttl="0"/>
                <service name="msrpc" method="table" conf="3"/>
            </port>
            <port protocol="tcp" portid="62078">
                <state state="closed" reason="conn-refused" reason_ttl="0"/>
                <service name="iphone-sync" method="table" conf="3"/>
            </port>
        </ports>
        <times srtt="106" rttvar="2150" to="100000"/>
    </host>
XML;

        $result = XmlHelper::xmlToArray($input);

        $expected = [
            'starttime' => '1778043060',
            'endtime' => '1778043060',
            'status' => [
                'state' => 'up',
                'reason' => 'syn-ack',
                'reason_ttl' => '0',
            ],
            'address' => [
                'addr' => '172.80.1.12',
                'addrtype' => 'ipv4',
            ],
            'hostnames' => [
                'hostname' => [
                    'name' => 'open-audit-target',
                    'type' => 'PTR',
                ],
            ],
            'ports' => [
                'port' => [
                    0 => [
                        'protocol' => 'tcp',
                        'portid' => '22',
                        'state' => [
                            'state' => 'open',
                            'reason' => 'syn-ack',
                            'reason_ttl' => '0',
                        ],
                        'service' => [
                            'name' => 'ssh',
                            'method' => 'table',
                            'conf' => '3',
                        ],
                    ],
                    1 => [
                        'protocol' => 'tcp',
                        'portid' => '135',
                        'state' => [
                            'state' => 'closed',
                            'reason' => 'conn-refused',
                            'reason_ttl' => '0',
                        ],
                        'service' => [
                            'name' => 'msrpc',
                            'method' => 'table',
                            'conf' => '3',
                        ],
                    ],
                    2 => [
                            'protocol' => 'tcp',
                            'portid' => '62078',
                            'state' => [
                                'state' => 'closed',
                                'reason' => 'conn-refused',
                                'reason_ttl' => '0',
                            ],
                            'service' => [
                                'name' => 'iphone-sync',
                                'method' => 'table',
                                'conf' => '3',
                            ],
                        ],
                    ],
                ],
            'times' => [
                'srtt' => '106',
                'rttvar' => '2150',
                'to' => '100000',
            ],
        ];

        $this->assertSame($expected, $result);
    }
}
