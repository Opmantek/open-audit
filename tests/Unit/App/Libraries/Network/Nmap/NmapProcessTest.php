<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Nmap\NmapOptions;
use App\Libraries\Network\Nmap\NmapProcess;

final class NmapProcessTest extends TestCase
{
    public function testProcessConstructorGeneratesCommand(): void
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

        $process = new NmapProcess($options);
        $command = $process->getCommandLine();

        $expected = "'/usr/bin/nmap' '-F' '-v' '-sS' '-p' '22,80' '-oX' 'scan.xml' 'example.com'";

        $this->assertSame($expected, $command);
    }
}
