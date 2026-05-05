<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use Symfony\Component\Process\Process;

class NmapProcess extends Process
{
    /**
     * Initializes a new process to execute Nmap with the given options.
     *
     * @param NmapOptions $options The Nmap options to use for generating the command.
     * @param float|null $timeout Maximum execution time in seconds. Defaults to 60.
     * @param string|null $cwd The working directory for the process. Defaults to null.
     * @param array|null $env Environment variables to set for the process. Defaults to null.
     * @param mixed $input Optional input to pass to the process. Defaults to null.
     */
    public function __construct(
        NmapOptions $options,
        ?float $timeout = 60,
        ?string $cwd = null,
        ?array $env = null,
        mixed $input = null,
    ) {
        parent::__construct($this->generateCommand($options), $cwd, $env, $input, $timeout);
    }

    /**
     * Generates the command array to run Nmap.
     *
     * @param NmapOptions $options The options used to build the Nmap command.
     * @return array The generated command as an array suitable for Process execution.
     */
    protected function generateCommand(NmapOptions $options): array
    {
        return (new NmapCommand())->generate($options);
    }
}
