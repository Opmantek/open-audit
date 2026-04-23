<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Nmap\NmapCommand;
use App\Libraries\Network\Nmap\NmapOptions;

use function in_array;

final class NmapCommandTest extends TestCase
{
    public function testGenerateMinimalCommand(): void
    {
        $options          = new NmapOptions();
        $options->targets = '127.0.0.1';

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertSame(['nmap', '127.0.0.1'], $result);
    }

    /**
     * @dataProvider scanTypeDataProvider
     */
    public function testScanTypes(string $scanType, string $expectedFlag): void
    {
        $options           = new NmapOptions();
        $options->targets  = 'localhost';
        $options->scanType = $scanType;

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array($expectedFlag, $result));
    }

    public static function scanTypeDataProvider(): array
    {
        return [
            [NmapOptions::SCAN_TYPE_LIST, '-sL'],
            [NmapOptions::SCAN_TYPE_PING, '-sP'],
            [NmapOptions::SCAN_TYPE_TCP_SYN, '-sS'],
            [NmapOptions::SCAN_TYPE_TCP_CON, '-sT'],
            [NmapOptions::SCAN_TYPE_TCP_ACK, '-sA'],
            [NmapOptions::SCAN_TYPE_TCP_FIN, '-sF'],
            [NmapOptions::SCAN_TYPE_TCP_WIN, '-sW'],
            [NmapOptions::SCAN_TYPE_UDP, '-sU'],
            [NmapOptions::SCAN_TYPE_XMAS, '-sX'],
        ];
    }

    public function testBooleanFlags(): void
    {
        $options                   = new NmapOptions();
        $options->targets          = 'localhost';
        $options->fast             = true;
        $options->noDns            = true;
        $options->noPing           = true;
        $options->osDetection      = true;
        $options->serviceDetection = true;

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('-F', $result));
        $this->assertTrue(in_array('-n', $result));
        $this->assertTrue(in_array('-Pn', $result));
        $this->assertTrue(in_array('-O', $result));
        $this->assertTrue(in_array('-sV', $result));
    }

    public function testVerbosityAndDebugLevels(): void
    {
        $options            = new NmapOptions();
        $options->targets   = 'localhost';
        $options->verbosity = 2;
        $options->debug     = 3;

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('-vv', $result));
        $this->assertTrue(in_array('-ddd', $result));
    }

    public function testTimingAndTimeout(): void
    {
        $options              = new NmapOptions();
        $options->targets     = 'localhost';
        $options->timing      = 4;
        $options->hostTimeout = 120;

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('-T4', $result));
        $this->assertTrue(in_array('--host-timeout', $result));
    }

    public function testPortsAreIncluded(): void
    {
        $options          = new NmapOptions();
        $options->targets = 'localhost';
        $options->ports   = [80, 443];

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('-p', $result));
        $this->assertTrue(in_array('80,443', $result));
    }

    public function testExcludePortsAreCombined(): void
    {
        $options                  = new NmapOptions();
        $options->targets         = 'localhost';
        $options->excludePorts    = [80];
        $options->excludeTcpPorts = [443];
        $options->excludeUdpPorts = [53];

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('--exclude-ports', $result));
        $this->assertTrue(in_array('80,T:443,U:53', $result));
    }

    public function testExcludePortRangesAreContracted(): void
    {
        $options                  = new NmapOptions();
        $options->targets         = 'localhost';
        $options->excludePorts    = [80, 81, 82, 83, 84];
        $options->excludeTcpPorts = [443, 444, 445];
        $options->excludeUdpPorts = [161, 162, 163];

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('--exclude-ports', $result));
        $this->assertTrue(in_array('80-84,T:443-445,U:161-163', $result));
    }

    public function testExcludePortsWithMixedRangesAndSinglePorts(): void
    {
        $options                  = new NmapOptions();
        $options->targets         = 'localhost';
        $options->excludePorts    = [80, 81, 82, 85, 87];
        $options->excludeTcpPorts = [443, 444];
        $options->excludeUdpPorts = [161, 162, 165];

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('--exclude-ports', $result));
        $this->assertTrue(in_array('80-82,85,87,T:443-444,U:161-162,165', $result));
    }

    public function testExcludePortsWithNoValues(): void
    {
        $options                  = new NmapOptions();
        $options->targets         = 'localhost';
        $options->excludePorts    = [];
        $options->excludeTcpPorts = [];
        $options->excludeUdpPorts = [];

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertFalse(in_array('--exclude-ports', $result));
    }

    public function testExcludePortsWithOnlyGeneralPorts(): void
    {
        $options                  = new NmapOptions();
        $options->targets         = 'localhost';
        $options->excludePorts    = [80, 443];
        $options->excludeTcpPorts = [];
        $options->excludeUdpPorts = [];

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('--exclude-ports', $result));
        $this->assertTrue(in_array('80,443', $result));
    }

    public function testExcludePortsWithOnlyTcpPorts(): void
    {
        $options                  = new NmapOptions();
        $options->targets         = 'localhost';
        $options->excludePorts    = [];
        $options->excludeTcpPorts = [443, 444, 8080];
        $options->excludeUdpPorts = [];

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('--exclude-ports', $result));
        $this->assertTrue(in_array('T:443-444,8080', $result));
    }

    public function testExcludePortsWithOnlyUdpPorts(): void
    {
        $options                  = new NmapOptions();
        $options->targets         = 'localhost';
        $options->excludePorts    = [];
        $options->excludeTcpPorts = [];
        $options->excludeUdpPorts = [53, 161, 162];

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('--exclude-ports', $result));
        $this->assertTrue(in_array('U:53,161-162', $result));
    }

    /**
     * @dataProvider outputTypesDataProvider
     */
    public function testOutputTypes(string $type, string $flag): void
    {
        $options             = new NmapOptions();
        $options->targets    = 'localhost';
        $options->outputType = $type;
        $options->outputFile = 'out.txt';

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array($flag, $result));
        $this->assertTrue(in_array('out.txt', $result));
    }

    public static function outputTypesDataProvider(): array
    {
        return [
            [NmapOptions::OUTPUT_TYPE_NORMAL, '-oN'],
            [NmapOptions::OUTPUT_TYPE_GREP, '-oG'],
            [NmapOptions::OUTPUT_TYPE_XML, '-oX'],
        ];
    }

    public function testTargetsFile(): void
    {
        $options              = new NmapOptions();
        $options->targetsFile = 'targets.txt';
        $options->targets     = 'ignored.com';

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $this->assertTrue(in_array('-iL', $result));
        $this->assertTrue(in_array('targets.txt', $result));
    }

    public function testFullCommandGeneration(): void
    {
        $options             = new NmapOptions();
        $options->exePath    = '/usr/bin/nmap';
        $options->targets    = 'example.com';
        $options->fast       = true;
        $options->scanType   = NmapOptions::SCAN_TYPE_TCP_SYN;
        $options->ports      = [22, 80];
        $options->verbosity  = 1;
        $options->outputType = NmapOptions::OUTPUT_TYPE_XML;
        $options->outputFile = 'scan.xml';

        $command = new NmapCommand();
        $result  = $command->generate($options);

        $expected = [
            '/usr/bin/nmap',
            '-F',
            '-v',
            '-sS',
            '-p',
            '22,80',
            '-oX',
            'scan.xml',
            'example.com',
        ];

        $this->assertSame($expected, $result);
    }
}
