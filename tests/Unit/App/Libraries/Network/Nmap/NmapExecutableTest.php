<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use App\Libraries\Network\Nmap\NmapExecutable;
use App\Libraries\Network\Nmap\NmapLocator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;

final class NmapExecutableTest extends TestCase
{
    public function testFallsBackToPhp(): void
    {
        $locator = $this->createMock(NmapLocator::class);
        $locator->method('find')->willReturn(null);

        $nmap = new NmapExecutable($locator);

        $this->assertSame(NmapExecutable::TYPE_PHP, $nmap->getType());
        $this->assertTrue($nmap->isUnprivileged());
        $this->assertSame(
            ['php', ROOTPATH . 'spark', 'network:scan', '--no-header'],
            $nmap->getExePath()
        );
    }

    public function testDetectsUnprivilegedFromError(): void
    {
        $locator = $this->createMock(NmapLocator::class);
        $locator->method('find')->willReturn('/usr/bin/nmap');

        $processMock = $this->createMock(Process::class);
        $processMock->method('run')->willReturn(0);
        $processMock->method('getOutput')->willReturn('');
        $processMock->method('getErrorOutput')->willReturn('Operation not permitted');

        $nmap = new class($locator, $processMock) extends NmapExecutable {
            public function __construct($locator, private $processMock)
            {
                parent::__construct($locator);
            }

            protected function createPrivilegeDetectionProcess(string $executable): Process
            {
                return $this->processMock;
            }
        };

        $this->assertSame(NmapExecutable::TYPE_NMAP, $nmap->getType());
        $this->assertTrue($nmap->isUnprivileged());
    }

    public function testDetectsPrivileged(): void
    {
        $locator = $this->createMock(NmapLocator::class);
        $locator->method('find')->willReturn('/usr/bin/nmap');

        $processMock = $this->createMock(Process::class);
        $processMock->method('run')->willReturn(0);
        $processMock->method('getOutput')->willReturn('');
        $processMock->method('getErrorOutput')->willReturn('');

        $nmap = new class($locator, $processMock) extends NmapExecutable {
            public function __construct($locator, private $processMock)
            {
                parent::__construct($locator);
            }

            protected function createPrivilegeDetectionProcess(string $executable): Process
            {
                return $this->processMock;
            }
        };

        $this->assertFalse($nmap->isUnprivileged());
    }
}
