<?php

declare(strict_types=1);

namespace App\Libraries\Network\Nmap;

use App\Libraries\Network\Helper\XmlHelper;

use function str_contains;
use function strpos;
use function substr;

final class NmapHostXmlParser
{
    private string $buffer = '';

    public function parse(string $xml): array
    {
        $result = [];

        foreach ($this->feed($xml) as $host) {
            $result[] = $host;
        }

        return $result;
    }

    /**
     * Incrementally parse streamed Nmap XML chunks and yield parsed hosts.
     *
     * This parser is designed for partial/streaming Nmap output where `<host>`
     * elements may be split across multiple chunks.
     *
     * @param string $chunk Incoming XML fragment.
     * @return iterable<array<string, mixed>> Parsed host structures.
     */
    public function feed(string $chunk): iterable
    {
        $this->buffer .= $chunk;

        while (true) {
            $startOffset = strpos($this->buffer, '<host');
            if ($startOffset === false) {
                break;
            }

            $endOffset = strpos($this->buffer, '</host>', $startOffset);
            if ($endOffset === false) {
                break;
            }

            $endOffset   += 7; // strlen('</host>');
            $hostXml      = substr($this->buffer, $startOffset, $endOffset - $startOffset);
            $this->buffer = substr($this->buffer, $endOffset);

            if (! str_contains($hostXml, '<address')) {
                continue;
            }

            yield XmlHelper::xmlToArray($hostXml);
        }
    }
}
