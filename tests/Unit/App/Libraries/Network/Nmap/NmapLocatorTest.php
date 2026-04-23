<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use App\Libraries\Network\Nmap\NmapLocator;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\ExecutableFinder;

final class NmapLocatorTest extends TestCase
{
    public function testReturnsFirstMatchingCommonPath(): void
    {
        $root = vfsStream::setup('root', null, [
            'bin' => [
                'nmap' => 'binary',
            ],
        ]);

        $path = $root->url() . '/bin/nmap';

        $finder = $this->createStub(ExecutableFinder::class);

        $locator = new NmapLocator(
            commonPaths: [$path],
            finder: $finder
        );

        $result = $locator->find();

        $this->assertSame($path, $result);
    }

    public function testFallsBackToExecutableFinder(): void
    {
        $root = vfsStream::setup('root');

        $finder = $this->createMock(ExecutableFinder::class);
        $finder->expects($this->once())
            ->method('find')
            ->with('nmap')
            ->willReturn('/usr/bin/nmap');

        $locator = new NmapLocator(
            commonPaths: [$root->url() . '/does-not-exist'],
            finder: $finder
        );

        $result = $locator->find();

        $this->assertSame('/usr/bin/nmap', $result);
    }

    public function testReturnsNullWhenNothingFound(): void
    {
        $root = vfsStream::setup('root');

        $finder = $this->createMock(ExecutableFinder::class);
        $finder->expects($this->once())
            ->method('find')
            ->with('nmap')
            ->willReturn(null);

        $locator = new NmapLocator(
            commonPaths: [$root->url() . '/missing'],
            finder: $finder
        );

        $result = $locator->find();

        $this->assertNull($result);
    }

    public function testStopsAfterFirstMatch(): void
    {
        $root = vfsStream::setup('root', null, [
            'first' => ['nmap' => 'binary'],
            'second' => ['nmap' => 'binary'],
        ]);

        $first = $root->url() . '/first/nmap';
        $second = $root->url() . '/second/nmap';

        $finder = $this->createMock(ExecutableFinder::class);
        $finder->expects($this->never())->method('find');

        $locator = new NmapLocator(
            commonPaths: [$first, $second],
            finder: $finder
        );

        $result = $locator->find();

        $this->assertSame($first, $result);
    }
}
