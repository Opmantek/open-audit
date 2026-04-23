<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Clock;

use App\Libraries\Clock\Stopwatch;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use RuntimeException;

final class StopwatchTest extends TestCase
{
    private Stopwatch $stopwatch;

    protected function setUp(): void
    {
        $this->stopwatch = new Stopwatch();
    }

    /**
     * @dataProvider humanReadableElapsedTimeDataProvider
     */
    public function testHumanReadableElapsedTime(int $startTime, int $endTime, string $expected)
    {
        $this->setProperty($this->stopwatch, 'startTime', $startTime);
        $this->setProperty($this->stopwatch, 'endTime', $endTime);

        $this->assertSame($expected, $this->stopwatch->getElapsedTime(true));
    }

    public function humanReadableElapsedTimeDataProvider(): array
    {
        return [
            'zero seconds' => [
                'startTime' => 0,
                'endTime'   => 0,
                'expected'  => '0 seconds'
            ],
            'seconds only' => [
                'startTime' => 0,
                'endTime'   => 3,
                'expected'  => '3 seconds'
            ],
            'minutes and seconds' => [
                'startTime' => 0,
                'endTime'   => 65,
                'expected'  => '1 minute, 5 seconds'
            ],
            'hours, minutes and seconds' => [
                'startTime' => 0,
                'endTime'   => 3665,
                'expected'  => '1 hour, 1 minute, 5 seconds'
            ],
            'days, hours, minutes and seconds' => [
                'startTime' => 0,
                'endTime'   => 90062,
                'expected'  => '1 day, 1 hour, 1 minute, 2 seconds'
            ],
        ];
    }

    public function testElapsedTime()
    {
        $this->setProperty($this->stopwatch, 'startTime', 10);
        $this->setProperty($this->stopwatch, 'endTime', 60);

        $this->assertSame(50.0, $this->stopwatch->getElapsedTime());
    }

    public function testCannotStartWhenRunning()
    {
        $this->stopwatch->start();

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Stopwatch is already running.');

        $this->stopwatch->start();
    }

    public function testCannotStopWhenNotRunning()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Stopwatch is not running.');
        $this->stopwatch->stop();
    }

    private function setProperty($object, $propertyName, $value)
    {
        $reflection = new ReflectionClass($object);
        $property = $reflection->getProperty($propertyName);
        $property->setValue($object, $value);
    }
}
