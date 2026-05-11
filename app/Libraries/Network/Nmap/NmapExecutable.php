<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use Symfony\Component\Process\Process;

class NmapExecutable
{
    const TYPE_NMAP = 'nmap';
    const TYPE_PHP  = 'php';

    const PHP_SCAN  = ['php', ROOTPATH . 'spark', 'network:scan', '--no-header'];

    private string $type;
    private array $exePath;
    private bool $unprivileged = true;

    /**
     * Initialise the executable configuration and determine whether a native
     * nmap binary is available via the locator. If found, using the nmap binary
     * we execute a command to detect privilege capability. Otherwise, falling
     * back to the PHP-based scanner command.
     *
     * @param NmapLocator $locator Locator used to find the nmap binary.
     */
    public function __construct(
        private NmapLocator $locator = new NmapLocator(),
    ) {
        $executable = $this->locator->find();
        $this->type = $executable === null ? self::TYPE_PHP : self::TYPE_NMAP;

        if ($executable !== null) {
            $this->exePath = [$executable];
            $this->unprivileged = $this->checkIsUnprivileged($executable);
        } else {
            $this->exePath = self::PHP_SCAN;
        }
    }

    /**
     * Retrieve the executable title being used.
     *
     * @return string Either 'Nmap' or 'PHP'.
     */
    public function getTitle(): string
    {
        return $this->type === self::TYPE_NMAP ? 'Nmap' : 'PHP';
    }

    /**
     * Retrieve the executable type being used. This can be usefully when
     * wanting to determine whether Nmap or the PHP-based scanner is used.
     *
     * @return string Either 'nmap' or 'php'.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Retrieve the command parts used to execute the scanner.
     *
     * @return array Command and arguments as an array suitable for Process.
     */
    public function getExePath(): array
    {
        return $this->exePath;
    }

    /**
     * Whether the environment requires unprivileged mode.
     *
     * @return bool True if raw socket access is not permitted.
     */
    public function isUnprivileged(): bool
    {
        return $this->unprivileged;
    }

    /**
     * Create the process used to detect raw socket privilege capability.
     * This method is exposed and separated for testing purposes.
     *
     * @param string $executable Path to the nmap binary.
     * @return Process Configured process instance.
     */
    protected function createPrivilegeDetectionProcess(string $executable): Process
    {
        $command = [$executable, '-sS', '-p', '22', '-oG', '-', '127.0.0.1'];
        $process = new Process($command);
        $process->setTimeout(3);

        return $process;
    }

    /**
     * Check whether nmap must run in unprivileged mode.
     *
     * @param string $executable Path to the nmap binary.
     * @return bool True if unprivileged mode is required.
     */
    protected function checkIsUnprivileged(string $executable): bool
    {
        $process = $this->createPrivilegeDetectionProcess($executable);
        $process->run();

        $output = strtolower($process->getErrorOutput());

        return str_contains($output, 'open a raw socket') || str_contains($output, 'operation not permitted');
    }
}
