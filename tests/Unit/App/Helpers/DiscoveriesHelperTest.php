<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: LicenseRef-Proprietary-FirstWave-202502

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Helpers;

use App\Libraries\Network\Nmap\NmapOptions;
use App\Libraries\Network\Nmap\NmapProcess;
use CodeIgniter\Test\CIUnitTestCase;
use stdClass;

/**
 * nmap_host_result() in discoveries_helper.
 *
 * nmap writes no <host> element when an address does not answer its discovery probes, or when
 * nmap fails to run. The four per-address scans used to pass that empty result straight to
 * check_nmap_host_array(), which logged "No host provided" to the PHP log with nothing to act on.
 * These run a harmless command in nmap's place so both empty-host branches can be exercised
 * without nmap, a network or a database.
 */
final class DiscoveriesHelperTest extends CIUnitTestCase
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        helper('discoveries');
    }

    /** A stand-in for DiscoveryLogModel that keeps what it was asked to write. */
    private function logModel(): object
    {
        return new class {
            /** @var object[] */
            public array $created = [];
            public function create(object $log): int
            {
                $this->created[] = clone $log;
                return count($this->created);
            }
        };
    }

    private function logTemplate(): stdClass
    {
        $log = new stdClass();
        $log->discovery_id = 1;
        $log->ip = '192.0.2.1';
        $log->severity = 7;
        $log->command_status = 'notice';
        $log->message = 'unchanged';
        $log->command = '';
        $log->command_output = '';
        return $log;
    }

    private function finishedProcess(string $executable): NmapProcess
    {
        $options = new NmapOptions();
        $options->exePath = $executable;
        $options->targets = '192.0.2.1';
        $process = new NmapProcess($options, 10);
        $process->run();
        return $process;
    }

    public function testAnEmptyHostFromASuccessfulScanIsLoggedAsNoAnswer(): void
    {
        $discovery = new stdClass();
        $discovery->id = 1;
        $model = $this->logModel();
        $log = $this->logTemplate();

        $result = nmap_host_result($discovery, [], '192.0.2.1', $this->finishedProcess('true'), $model, $log);

        $this->assertSame([], $result);
        $this->assertCount(1, $model->created);
        $entry = $model->created[0];
        $this->assertStringContainsString('Nmap found no host at 192.0.2.1', $entry->message);
        $this->assertStringContainsString('did not answer the discovery probes', $entry->message);
        $this->assertSame('notice', $entry->command_status);
        $this->assertSame(6, $entry->severity);
        $this->assertStringContainsString('192.0.2.1', $entry->command, 'the command line is recorded');
        $this->assertSame('No host element in the nmap output.', $entry->command_output);
    }

    public function testAnEmptyHostFromAFailedScanIsLoggedWithTheExitCode(): void
    {
        $discovery = new stdClass();
        $discovery->id = 1;
        $model = $this->logModel();
        $log = $this->logTemplate();

        $result = nmap_host_result($discovery, [], '192.0.2.1', $this->finishedProcess('false'), $model, $log);

        $this->assertSame([], $result);
        $this->assertCount(1, $model->created);
        $this->assertStringContainsString('Nmap failed for 192.0.2.1 with exit code 1', $model->created[0]->message);
    }

    public function testTheCallersLogTemplateIsPutBack(): void
    {
        $discovery = new stdClass();
        $discovery->id = 1;
        $log = $this->logTemplate();

        nmap_host_result($discovery, [], '192.0.2.1', $this->finishedProcess('true'), $this->logModel(), $log);

        // The template is shared by every log line the per-address scan writes afterwards, so the
        // fields set here must not leak into them.
        $this->assertSame('', $log->message);
        $this->assertSame('', $log->command);
        $this->assertSame('', $log->command_output);
        $this->assertSame(7, $log->severity);
    }
}
