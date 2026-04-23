<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Nmap\NmapHostXmlParser;

use function explode;
use function file_get_contents;
use function iterator_to_array;
use function json_decode;

final class NmapHostXmlParserTest extends TestCase
{
    /**
     * @dataProvider singleChunkDataProvider
     */
    public function testSingleChunkParsing(string $chunk, array $expected): void
    {
        $parser = new NmapHostXmlParser();

        $result = iterator_to_array($parser->feed($chunk), false);

        $this->assertSame($expected, $result);
    }

    public static function singleChunkDataProvider(): array
    {
        return [
            'single host with address'     => [
                'chunk'    => '<host><address addr="192.168.0.1"/></host>',
                'expected' => [
                    [
                        'address' => [
                            'addr' => '192.168.0.1',
                        ],
                    ],
                ],
            ],
            'host without address ignored' => [
                'chunk'    => '<host><status state="up"/></host>',
                'expected' => [],
            ],
            'host with multiple addresses' => [
                'chunk'    => '
                    <host>
                        <address addr="192.168.1.1" addrtype="ipv4" />
                        <address addr="00:14:22:01:23:45" addrtype="mac" />
                    </host>',
                'expected' => [
                    [
                        'address' => [
                            [
                                'addr' => '192.168.1.1',
                                'addrtype' => 'ipv4',
                            ],
                            [
                                'addr' => '00:14:22:01:23:45',
                                'addrtype' => 'mac',
                            ]
                        ],
                    ],
                ],
            ],
            'multiple hosts in one chunk'  => [
                'chunk'    => '
                    <host><address addr="10.0.0.1"/></host>
                    <host><address addr="10.0.0.2"/></host>
                ',
                'expected' => [
                    [
                        'address' => [
                            'addr' => '10.0.0.1',
                        ],
                    ],
                    [
                        'address' => [
                            'addr' => '10.0.0.2',
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * @dataProvider chunkedStreamDataProvider
     */
    public function testChunkedStreaming(array $chunks, array $expected): void
    {
        $parser = new NmapHostXmlParser();

        $result = [];

        foreach ($chunks as $chunk) {
            foreach ($parser->feed($chunk) as $host) {
                $result[] = $host;
            }
        }

        $this->assertSame($expected, $result);
    }

    public static function chunkedStreamDataProvider(): array
    {
        return [
            'host split across chunks'                => [
                'chunks'   => [
                    '<host><address',
                    ' addr="192.168.1.1"/></host>',
                ],
                'expected' => [
                    [
                        'address' => [
                            'addr' => '192.168.1.1',
                        ],
                    ],
                ],
            ],
            'multiple hosts split arbitrarily'        => [
                'chunks'   => [
                    '<host><address addr="10.0.0.1"/></host><host>',
                    '<address addr="10.0.0.2"/></host>',
                ],
                'expected' => [
                    [
                        'address' => [
                            'addr' => '10.0.0.1',
                        ],
                    ],
                    [
                        'address' => [
                            'addr' => '10.0.0.2',
                        ],
                    ],
                ],
            ],
            'host split with irrelevant prefix noise' => [
                'chunks'   => [
                    'random data <host><address addr="1.1.1.1"/>',
                    '</host>',
                ],
                'expected' => [
                    [
                        'address' => [
                            'addr' => '1.1.1.1',
                        ],
                    ],
                ],
            ],
        ];
    }

    public function testIgnoresHostsWithoutAddressAcrossChunks(): void
    {
        $parser = new NmapHostXmlParser();

        $chunks = [
            '<host><status state="up"/>',
            '</host><host><address addr="8.8.8.8"/></host>',
        ];

        $result = [];

        foreach ($chunks as $chunk) {
            foreach ($parser->feed($chunk) as $host) {
                $result[] = $host;
            }
        }

        $this->assertSame([
            [
                'address' => [
                    'addr' => '8.8.8.8',
                ],
            ],
        ], $result);
    }

    public function testLoadingCompleteFile(): void
    {
        $xml  = file_get_contents(__DIR__ . '/../../../../../Support/Resource/nmap_example_complete.xml');
        $json = file_get_contents(__DIR__ . '/../../../../../Support/Resource/nmap_example_expected.json');

        $parser = new NmapHostXmlParser();

        $result = $parser->parse($xml);

        $expected = json_decode($json, true);

        $this->assertSame($expected, $result);
    }

    public function testLoadingChunksFile(): void
    {
        $xml  = file_get_contents(__DIR__ . '/../../../../../Support/Resource/nmap_example_chunks.xml');
        $json = file_get_contents(__DIR__ . '/../../../../../Support/Resource/nmap_example_expected.json');

        $parser = new NmapHostXmlParser();

        $chunks = explode('<!-- BEGIN CHUNK -->', $xml);
        $result = [];

        foreach ($chunks as $chunk) {
            foreach ($parser->feed($chunk) as $host) {
                $result[] = $host;
            }
        }

        $expected = json_decode($json, true);

        $this->assertSame($expected, $result);
    }
}
