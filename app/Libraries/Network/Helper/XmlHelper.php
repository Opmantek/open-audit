<?php

declare(strict_types=1);

namespace App\Libraries\Network\Helper;

use SimpleXMLElement;

use function array_key_exists;
use function is_array;
use function is_string;
use function libxml_use_internal_errors;
use function simplexml_load_string;
use function trim;

use const LIBXML_NOCDATA;

final class XmlHelper
{
    /**
     * Convert XML into an associative array.
     *
     * - Accepts either a raw XML string or a SimpleXMLElement instance.
     * - Attributes are included as key-value pairs at the same level.
     * - Child elements are recursively converted.
     * - Repeated child elements are grouped into indexed arrays.
     * - Text content is included under the "_value" key when mixed with children/attributes,
     *   or returned directly if the element contains only text.
     *
     * Example: <host><status state="up"/></host>
     * [
     *   'status' => [
     *     'state' => 'up',
     *   ],
     * ]
     *
     * @param SimpleXMLElement|string $xml XML string or SimpleXMLElement instance.
     * @return array<string, mixed>|string Parsed XML as an associative array.
     */
    public static function xmlToArray(SimpleXMLElement|string $xml): array|string
    {
        if (is_string($xml)) {
            libxml_use_internal_errors(true);
            $xmlElement = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
            if ($xmlElement === false) {
                return [];
            }
        } else {
            $xmlElement = $xml;
        }

        $result = [];

        foreach ($xmlElement->attributes() as $name => $value) {
            $result[$name] = (string) $value;
        }

        foreach ($xmlElement->children() as $childName => $child) {
            $childArray = self::xmlToArray($child);

            if (isset($result[$childName])) {
                if (! is_array($result[$childName]) || ! array_key_exists(0, $result[$childName])) {
                    $result[$childName] = [$result[$childName]];
                }
                $result[$childName][] = $childArray;
            } else {
                $result[$childName] = $childArray;
            }
        }

        $text = trim((string) $xmlElement);

        if ($text !== '') {
            if (! empty($result)) {
                $result['_value'] = $text;
            } else {
                return $text;
            }
        }

        return $result;
    }
}
