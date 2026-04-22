<?php

declare(strict_types=1);

namespace OpenAuditTest\Unit\App\Libraries\Network\Nmap;

use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\TestCase;
use App\Libraries\Network\Nmap\NmapOptions;
use App\Libraries\Network\Nmap\NmapTargetFileWriter;
use RuntimeException;

use function fclose;
use function fgets;
use function file;
use function fopen;
use function trim;

use const FILE_IGNORE_NEW_LINES;

final class NmapTargetFileWriterTest extends TestCase
{
    private NmapTargetFileWriter $writer;

    protected function setUp(): void
    {
        $this->writer = new NmapTargetFileWriter();
    }

    /**
     * @dataProvider writeDataProvider
     */
    public function testWrite(string $targets, array $expectedLines): void
    {
        $root = vfsStream::setup('root');
        $file = vfsStream::url('root/targets.txt');

        $options          = new NmapOptions();
        $options->targets = $targets;

        $this->writer->write($options, $file);

        $content = file($file, FILE_IGNORE_NEW_LINES);

        $this->assertSame($expectedLines, $content);
    }

    public static function writeDataProvider(): array
    {
        return [
            'single ip'        => [
                'targets'       => '192.168.1.1',
                'expectedLines' => ['192.168.1.1'],
            ],
            'small cidr range' => [
                'targets'       => '192.168.1.0/30',
                'expectedLines' => [
                    '192.168.1.0',
                    '192.168.1.1',
                    '192.168.1.2',
                    '192.168.1.3',
                ],
            ],
        ];
    }

    public function testLargeCidrExpansion(): void
    {
        $root = vfsStream::setup('root');
        $file = vfsStream::url('root/targets.txt');

        $expectedIpCount = 256 * 4;

        $options          = new NmapOptions();
        $options->targets = '192.168.1.0/24 192.168.2.0/24 192.168.3.0/24 192.168.4.0/24';

        $this->writer->write($options, $file);

        $ipCount = 0;
        $handle  = fopen($file, 'r');

        while (($line = fgets($handle)) !== false) {
            if (trim($line) !== '') {
                $ipCount++;
            }
        }

        fclose($handle);

        $this->assertSame($expectedIpCount, $ipCount);
    }

    public function testWriteThrowsWhenTargetsMissing(): void
    {
        $root = vfsStream::setup('root');
        $file = vfsStream::url('root/targets.txt');

        $options          = new NmapOptions();
        $options->targets = null;

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('No targets defined');

        $this->writer->write($options, $file);
    }
}
