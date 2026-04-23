<?php

declare(strict_types=1);

namespace App\Libraries\Clock;

use RuntimeException;

class Stopwatch
{
    protected ?float $startTime = null;
    protected ?float $endTime   = null;
    protected bool $running     = false;

    public function start(): void
    {
        if ($this->running) {
            throw new RuntimeException('Stopwatch is already running.');
        }

        $this->startTime = microtime(true);
        $this->running = true;
    }

    public function stop(): void
    {
        if (!$this->running) {
            throw new RuntimeException('Stopwatch is not running.');
        }

        $this->endTime = microtime(true);
        $this->running = false;
    }

    public function getElapsedTime(): string
    {
        if ($this->running) {
            throw new RuntimeException('Stopwatch is still running.');
        }

        $elapsedSeconds = $this->endTime - $this->startTime;

        $days = floor($elapsedSeconds / 86400);
        $elapsedSeconds %= 86400;

        $hours = floor($elapsedSeconds / 3600);
        $elapsedSeconds %= 3600;

        $minutes = floor($elapsedSeconds / 60);
        $seconds = round($elapsedSeconds % 60);

        $timeParts = [];
        if ($days > 0) {
            $timeParts[] = "$days day" . ($days == 1 ? '' : 's');
        }
        if ($hours > 0) {
            $timeParts[] = "$hours hour" . ($hours == 1 ? '' : 's');
        }
        if ($minutes > 0) {
            $timeParts[] = "$minutes minute" . ($minutes == 1 ? '' : 's');
        }
        if ($seconds > 0 || empty($timeParts)) {
            $timeParts[] = "$seconds second" . ($seconds == 1 ? '' : 's');
        }

        return implode(', ', $timeParts);
    }
}