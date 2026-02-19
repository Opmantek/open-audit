<?php

namespace OpenAuditTest\Unit\App\Services;

use App\Models\DiscoveryLogModel;
use App\Services\AuditServiceInterface;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Services;
use stdClass;

final class AuditServiceTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $discoveryLogModel = $this->createStub(DiscoveryLogModel::class);

        Services::injectMock('DiscoveryLogModel', $discoveryLogModel);
    }

    public function testCreateInstance(): void
    {
        $service = service('audit');

        $this->assertInstanceOf(AuditServiceInterface::class, $service);
    }

    public function testCreateUniqueInstance(): void
    {
        $service1 = service('audit', false);
        $service2 = service('audit', false);

        $this->assertNotSame($service1, $service2);
    }

    public function testCreateSharedInstance(): void
    {
        $service1 = service('audit', true);
        $service2 = service('audit', true);

        $this->assertSame($service1, $service2);
    }

    /**
     * @dataProvider convertFileDataProvider
     */
    public function testConvertFile(string $file): void
    {
        $service = service('audit');

        $this->assertFileExists($file);
        $this->assertFileIsReadable($file);

        $input = file_get_contents($file);
        $audit = $service->convert($input);

        $this->assertInstanceOf(stdClass::class, $audit);

        $array = (array) $audit;

        $this->assertNotEmpty($array);
        $this->assertArrayNotHasKey('sys', $array);
        $this->assertArrayHasKey('system', $array);
        $this->assertArrayHasKey('bios', $array);
        $this->assertArrayHasKey('processor', $array);
        $this->assertArrayHasKey('memory', $array);
        $this->assertArrayHasKey('motherboard', $array);
        $this->assertArrayHasKey('video', $array);
        $this->assertArrayHasKey('sound', $array);
        $this->assertArrayHasKey('network', $array);
        $this->assertArrayHasKey('ip', $array);
        $this->assertArrayHasKey('disk', $array);
        $this->assertArrayHasKey('partition', $array);
        $this->assertArrayHasKey('log', $array);
        $this->assertArrayHasKey('variable', $array);
        $this->assertArrayHasKey('pagefile', $array);
        $this->assertArrayHasKey('user', $array);
        $this->assertArrayHasKey('user_group', $array);
        $this->assertArrayHasKey('software', $array);
        $this->assertArrayHasKey('service', $array);
        $this->assertArrayHasKey('service', $array);
        $this->assertArrayHasKey('route', $array);
        $this->assertArrayHasKey('netstat', $array);

        // Anything risky or requires special handling... add an assertion here
    }

    public static function convertFileDataProvider(): array
    {
        return [
            [__DIR__ . '/../../../Support/Resource/example_device.xml'],
            [__DIR__ . '/../../../Support/Resource/example_device.json'],
        ];
    }

    public function testDataPrefixRemovedFromXmlInput(): void
    {
        $service = service('audit');

        $input = '<?xml version="1.0" encoding="UTF-8"?><system><sys><ip>10.10.1.1</ip></sys></system>';

        $audit = $service->convert($input);

        $this->assertInstanceOf(stdClass::class, $audit);

        $array = (array) $audit;

        $this->assertNotEmpty($array);
        $this->assertArrayNotHasKey('sys', $array);
        $this->assertArrayHasKey('system', $array);
        $this->assertIsArray($array['system']);
        $this->assertArrayHasKey('ip', $array['system']);
        $this->assertSame('10.10.1.1', $array['system']['ip']);
    }

    public function testConvertNonUtf8String(): void
    {
        $service = service('audit');

        $input = '<?xml version="1.0" encoding="UTF-8"?><system><sys><ip>10.10.1.1</ip></sys></system>';

        $utf16String = mb_convert_encoding($input, 'UTF-16', 'UTF-8');

        $audit = $service->convert($utf16String);

        $this->assertInstanceOf(stdClass::class, $audit);

        $array = (array) $audit;

        $this->assertNotEmpty($array);
        $this->assertArrayNotHasKey('sys', $array);
        $this->assertArrayHasKey('system', $array);
        $this->assertIsArray($array['system']);
        $this->assertArrayHasKey('ip', $array['system']);
        $this->assertSame('10.10.1.1', $array['system']['ip']);
    }
}
