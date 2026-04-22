<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Helper;

use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Helper\AuditHelper;
use stdClass;

use function file_get_contents;
use function json_encode;
use function mb_convert_encoding;

final class AuditHelperTest extends TestCase
{
    public function testInputToAuditWithValidJson(): void
    {
        $json = json_encode([
            'status' => 'up',
            'state'  => 'open',
        ]);

        $result = AuditHelper::inputToAudit($json);

        $this->assertSame('up', $result->status);
        $this->assertSame('open', $result->state);
    }

    public function testInputToAuditWithValidXml(): void
    {
        $xml = <<<XML
            <root>
                <status>up</status>
                <state>open</state>
            </root>
        XML;

        $result = AuditHelper::inputToAudit($xml);

        $this->assertSame('up', $result->status);
        $this->assertSame('open', $result->state);
    }

    public function testInputToAuditWithInvalidInputReturnsEmptyObject(): void
    {
        $input = 'not valid json or xml';

        $result = AuditHelper::inputToAudit($input);

        $this->assertSame([], (array) $result);
    }

    public function testSysKeyIsMappedToSystem(): void
    {
        $input = '<system><sys><ip>10.10.1.1</ip></sys><foo>bar</foo></system>';

        $result = AuditHelper::inputToAudit($input);

        $this->assertObjectHasProperty('system', $result);
        $this->assertSame(['ip' => '10.10.1.1'], (array) $result->system);
        $this->assertSame('bar', $result->foo);
        $this->assertObjectNotHasProperty('sys', $result);
    }

    public function testEmptyValuesAreSkipped(): void
    {
        $json = json_encode([
            'system' => [
                'ip'       => '10.10.1.1',
                'hostname' => '',
                'type'     => null,
            ],
        ]);

        $result = AuditHelper::inputToAudit($json);

        $this->assertObjectHasProperty('system', $result);
        $this->assertObjectNotHasProperty('hostname', $result->system);
        $this->assertObjectNotHasProperty('type', $result->system);
        $this->assertObjectHasProperty('ip', $result->system);
        $this->assertSame('10.10.1.1', $result->system->ip);
    }

    public function testNumericKeysAreIgnored(): void
    {
        $json = json_encode([
            'foo',
            'bar',
            'baz' => 'value',
        ]);

        $result = AuditHelper::inputToAudit($json);

        $this->assertObjectHasProperty('baz', $result);
        $this->assertSame('value', $result->baz);
        $this->assertCount(1, (array) $result);
    }

    public function testItemIsNormalizedToArrayOfObjects(): void
    {
        $json = json_encode([
            'bios' => [
                'item' => [
                    'version'     => '1.2',
                    'description' => 'Foo Bar',
                ],
            ],
        ]);

        $result = AuditHelper::inputToAudit($json);

        $this->assertIsArray($result->bios);
        $this->assertCount(1, $result->bios);
        $this->assertInstanceOf(stdClass::class, $result->bios[0]);
        $this->assertSame('1.2', $result->bios[0]->version);
        $this->assertSame('Foo Bar', $result->bios[0]->description);
    }

    public function testItemListRemainsArray(): void
    {
        $json = json_encode([
            'bios' => [
                'item' => [
                    ['version' => '1.1'],
                    ['version' => '1.2'],
                ],
            ],
        ]);

        $result = AuditHelper::inputToAudit($json);

        $this->assertIsArray($result->bios);
        $this->assertCount(2, $result->bios);
        $this->assertInstanceOf(stdClass::class, $result->bios[0]);
        $this->assertInstanceOf(stdClass::class, $result->bios[1]);
        $this->assertSame('1.1', $result->bios[0]->version);
        $this->assertSame('1.2', $result->bios[1]->version);
    }

    public function testScalarValuesArePreserved(): void
    {
        $json = json_encode([
            'string' => 'value',
            'int'    => 42,
            'float'  => 3.14,
            'bool'   => true,
        ]);

        $result = AuditHelper::inputToAudit($json);

        $this->assertSame('value', $result->string);
        $this->assertSame(42, $result->int);
        $this->assertSame(3.14, $result->float);
        $this->assertTrue($result->bool);
    }

    public function testJsonWithControlCharactersIsSanitized(): void
    {
        $json = "{\n\"name\":\"Test\x00\x1F\"}";

        $result = AuditHelper::inputToAudit($json);

        $this->assertSame('Test', $result->name);
    }

    public function testXmlWithControlCharactersIsSanitized(): void
    {
        $xml = "<root><name>Test\x00\x1F</name></root>";

        $result = AuditHelper::inputToAudit($xml);

        $this->assertSame('Test', $result->name);
    }

    public function testJsonWithHtmlEntitiesIsDecoded(): void
    {
        $json = '{"foo": "&lt;b&gt;Bar&lt;/b&gt;"}';

        $result = AuditHelper::inputToAudit($json);

        $this->assertSame('<b>Bar</b>', $result->foo);
    }

    public function testXmlWithHtmlEntitiesIsDecoded(): void
    {
        $xml = '<root>&lt;foo&gt;Bar&lt;/foo&gt;</root>';

        $result = AuditHelper::inputToAudit($xml);

        $this->assertSame('Bar', $result->foo);
    }

    public function testJsonWithNonUtf8EncodingIsConverted(): void
    {
        $utf8Json = '{"text":"café"}';
        $isoJson  = mb_convert_encoding($utf8Json, 'ISO-8859-1', 'UTF-8');

        $result = AuditHelper::inputToAudit($isoJson);

        $this->assertSame('café', $result->text);
    }

    public function testXmlWithNonUtf8EncodingIsConverted(): void
    {
        $utf8Xml = '<root><text>café</text></root>';
        $isoXml  = mb_convert_encoding($utf8Xml, 'ISO-8859-1', 'UTF-8');

        $result = AuditHelper::inputToAudit($isoXml);

        $this->assertSame('café', $result->text);
    }

    public function testXmlWithDataPrefixIsStripped(): void
    {
        $xml = 'data=<root><name>Test</name></root>';

        $result = AuditHelper::inputToAudit($xml);

        $this->assertSame('Test', $result->name);
    }

    public function testUserKeysConvertedToIndexedArray(): void
    {
        $input = '<root><user><item><name>ssh-keys</name><keys><key>1234</key><key>4567</key></keys></item></user></root>';

        $result = AuditHelper::inputToAudit($input);

        $this->assertObjectHasProperty('user', $result);
        $this->assertIsArray($result->user);
        $this->assertInstanceOf(stdClass::class, $result->user[0]);
        $this->assertObjectHasProperty('keys', $result->user[0]);
        $this->assertSame(['1234', '4567'], $result->user[0]->keys);
    }

    /**
     * @dataProvider convertFileDataProvider
     */
    public function testConvertFile(string $file): void
    {
        $this->assertFileExists($file);
        $this->assertFileIsReadable($file);

        $input = file_get_contents($file);
        $audit = AuditHelper::inputToAudit($input);

        $this->assertObjectNotHasProperty('sys', $audit);
        $this->assertObjectHasProperty('system', $audit);
        $this->assertObjectHasProperty('bios', $audit);
        $this->assertObjectHasProperty('processor', $audit);
        $this->assertObjectHasProperty('memory', $audit);
        $this->assertObjectHasProperty('motherboard', $audit);
        $this->assertObjectHasProperty('video', $audit);
        $this->assertObjectHasProperty('sound', $audit);
        $this->assertObjectHasProperty('network', $audit);
        $this->assertObjectHasProperty('ip', $audit);
        $this->assertObjectHasProperty('disk', $audit);
        $this->assertObjectHasProperty('partition', $audit);
        $this->assertObjectHasProperty('log', $audit);
        $this->assertObjectHasProperty('variable', $audit);
        $this->assertObjectHasProperty('pagefile', $audit);
        $this->assertObjectHasProperty('user', $audit);
        $this->assertObjectHasProperty('user_group', $audit);
        $this->assertObjectHasProperty('software', $audit);
        $this->assertObjectHasProperty('service', $audit);
        $this->assertObjectHasProperty('service', $audit);
        $this->assertObjectHasProperty('route', $audit);
        $this->assertObjectHasProperty('netstat', $audit);

        // Anything risky or requires special handling... add an assertion here
    }

    public static function convertFileDataProvider(): array
    {
        return [
            [__DIR__ . '/../../../../../Support/Resource/device_example.json'],
            [__DIR__ . '/../../../../../Support/Resource/device_example.xml'],
        ];
    }
}
