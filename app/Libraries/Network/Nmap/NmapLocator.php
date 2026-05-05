<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use Symfony\Component\Process\ExecutableFinder;

class NmapLocator
{
    public function __construct(
        private array $commonPaths = [],
        private ExecutableFinder $finder = new ExecutableFinder(),
    ) {
    }

    public function find(): ?string
    {
        return $this->findInCommonPaths() ?? $this->finder->find('nmap');
    }

    private function findInCommonPaths(): ?string
    {
        $paths = $this->commonPaths !== []
            ? $this->commonPaths
            : $this->defaultPaths();

        foreach ($paths as $path) {
            if (is_file($path)) {
                return $path;
            }
        }

        return null;
    }

    private function defaultPaths(): array
    {
        return match (PHP_OS_FAMILY) {
            'Windows' => [
                'C:\\Program Files\\Nmap\\Nmap.exe',
                'C:\\Program Files (x86)\\Nmap\\Nmap.exe',
                'C:\\Windows\\System32\\Nmap.exe',
            ],
            default => [
                '/opt/nmap/bin/nmap',
                '/usr/local/bin/nmap',
                '/usr/bin/nmap',
            ],
        };
    }
}
