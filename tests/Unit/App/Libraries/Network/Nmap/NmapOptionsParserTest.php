<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Nmap\NmapOptions;
use App\Libraries\Network\Nmap\NmapOptionsParser;

final class NmapOptionsParserTest extends TestCase
{
    private NmapOptionsParser $parser;

    protected function setUp(): void
    {
        $this->parser = new NmapOptionsParser();
    }

    public function testBasicTargetParsing(): void
    {
        $result = $this->parser->parse(['script.php', '192.168.0.1']);

        $this->assertSame('192.168.0.1', $result->targets);
    }

    public function testNoDnsFlag(): void
    {
        $result = $this->parser->parse(['script.php', '-n']);

        $this->assertTrue($result->noDns);
    }

    public function testPingDisableFlag(): void
    {
        $result = $this->parser->parse(['script.php', '-Pn']);

        $this->assertTrue($result->noPing);
    }

    public function testRandomizeHostsFlag(): void
    {
        $result = $this->parser->parse(['script.php', '--randomize-hosts']);

        $this->assertTrue($result->randomizeHosts);
    }

    public function testMinParallelism(): void
    {
        $result = $this->parser->parse(['script.php', '--min-parallelism', '20']);

        $this->assertSame(20, $result->minParallelism);
    }

    public function testMaxParallelism(): void
    {
        $result = $this->parser->parse(['script.php', '--max-parallelism', '80']);

        $this->assertSame(80, $result->maxParallelism);
    }

    public function testMaxRetries(): void
    {
        $result = $this->parser->parse(['script.php', '--max-retries', '2']);

        $this->assertSame(2, $result->maxRetries);
    }

    public function testScanTypeSyn(): void
    {
        $result = $this->parser->parse(['script.php', '-sS']);

        $this->assertSame(NmapOptions::SCAN_TYPE_TCP_SYN, $result->scanType);
    }

    public function testTimingFlag(): void
    {
        $result = $this->parser->parse(['script.php', '-T4']);

        $this->assertSame(4, $result->timing);
    }

    public function testLongHostTimeout(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '--host-timeout',
            '10m',
        ]);

        $this->assertSame(600, $result->hostTimeout);
    }

    public function testLongHostTimeoutEqualsSyntax(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '--host-timeout=30',
        ]);

        $this->assertSame(30, $result->hostTimeout);
    }

    public function testTopPorts(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '--top-ports',
            '1000',
        ]);

        $this->assertSame(1000, $result->topPorts);
    }

    public function testExcludeHosts(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '--exclude',
            '192.168.0.1,192.168.0.2',
        ]);

        $this->assertSame('192.168.0.1,192.168.0.2', $result->excludeHosts);
    }

    public function testNumericPortParsing(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '-p',
            '80,443',
        ]);

        $this->assertSame([80, 443], $result->ports);
    }

    public function testNamedPortParsing(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '-p',
            'http,https',
        ]);

        $this->assertSame([80, 443], $result->ports);
    }

    public function testOutputFileDashPipe(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '-oX',
            '-',
        ]);

        $this->assertSame('-', $result->outputFile);
        $this->assertSame(NmapOptions::OUTPUT_TYPE_XML, $result->outputType);
    }

    public function testOutputFileNormal(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '-oN',
            'output.txt',
        ]);

        $this->assertSame('output.txt', $result->outputFile);
    }

    public function testTargetsFile(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '-iL',
            'targets.txt',
        ]);

        $this->assertSame('targets.txt', $result->targetsFile);
    }

    public function testExcludePortsTcpUdpParsing(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '--exclude-ports',
            'T:80,U:53,443',
        ]);

        $this->assertSame([443], $result->excludePorts);
        $this->assertSame([80], $result->excludeTcpPorts);
        $this->assertSame([53], $result->excludeUdpPorts);
    }

    public function testVerbosityIncrement(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '-vvv',
        ]);

        $this->assertSame(3, $result->verbosity);
    }

    public function testDebugIncrement(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '-dd',
        ]);

        $this->assertSame(2, $result->debug);
    }

    public function testUnknownFlagsCaptured(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '--weird-flag',
            '-Z',
        ]);

        $this->assertContains('--weird-flag', $result->unknownFlags);
        $this->assertContains('-Z', $result->unknownFlags);
    }

    public function testMultipleMixedArguments(): void
    {
        $result = $this->parser->parse([
            'script.php',
            '-n',
            '-sT',
            '-sV',
            '-O',
            '-T3',
            '--top-ports',
            '100',
            '10.0.0.1',
        ]);

        $this->assertTrue($result->noDns);
        $this->assertSame(NmapOptions::SCAN_TYPE_TCP_CON, $result->scanType);
        $this->assertTrue($result->osDetection);
        $this->assertTrue($result->serviceDetection);
        $this->assertSame(3, $result->timing);
        $this->assertSame(100, $result->topPorts);
        $this->assertSame('10.0.0.1', $result->targets);
    }
}
