<?php

declare(strict_types=1);

namespace App\Libraries\Network\Helper;

use stdClass;

use function array_keys;
use function array_map;
use function array_merge;
use function count;
use function html_entity_decode;
use function is_array;
use function is_numeric;
use function is_scalar;
use function json_decode;
use function json_last_error;
use function libxml_use_internal_errors;
use function mb_convert_encoding;
use function mb_detect_encoding;
use function mb_list_encodings;
use function preg_replace;
use function range;
use function simplexml_load_string;
use function str_starts_with;
use function substr;

use const ENT_QUOTES;
use const ENT_SUBSTITUTE;
use const ENT_XML1;
use const JSON_ERROR_NONE;

final class AuditHelper
{
    /**
     * Converts a raw input string (JSON or XML) into an audit stdClass object.
     *
     * @param string $input Raw input string (JSON or XML)
     * @return stdClass Normalized audit object
     */
    public static function inputToAudit(string $input): stdClass
    {
        $data = [];

        if (self::isInputJson($input)) {
            $data = self::convertJsonToArray($input);
        } elseif (self::isInputXml($input)) {
            $data = self::convertXmlToArray($input);
        }

        return self::arrayToAudit($data);
    }

    /**
     * Sanitizes a JSON string by decoding HTML entities, removing control
     * characters, and ensuring UTF-8 encoding.
     *
     * @param string $json Raw JSON string
     * @return string Sanitized JSON string
     */
    private static function sanitizeJson(string $json): string
    {
        if (mb_detect_encoding($json) !== 'UTF-8') {
            $json = mb_convert_encoding($json, 'UTF-8', mb_list_encodings());
        }

        $json = html_entity_decode($json, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $json = preg_replace('/[[:cntrl:]]/', '', $json);

        return $json;
    }

    /**
     * Sanitizes an XML string by decoding entities, normalizing encoding,
     * removing invalid characters, and stripping optional "data=" prefix.
     *
     * @param string $xml Raw XML string
     * @return string Sanitized XML string
     */
    private static function sanitizeXml(string $xml): string
    {
        if (mb_detect_encoding($xml) !== 'UTF-8') {
            $xml = mb_convert_encoding($xml, 'UTF-8', mb_list_encodings());
        }

        $xml = html_entity_decode($xml, ENT_XML1 | ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $xml = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F-\x9F]/u', '', $xml);

        if (str_starts_with($xml, 'data=')) {
            $xml = substr($xml, 5);
        }

        return $xml;
    }

    /**
     * Determines whether the given input string is valid JSON.
     *
     * @param string $input Input string to evaluate
     * @return bool True if valid JSON array, false otherwise
     */
    private static function isInputJson(string $input): bool
    {
        /** @var array|mixed $data */
        $data = json_decode(self::sanitizeJson($input), true);

        return json_last_error() === JSON_ERROR_NONE && is_array($data);
    }

    /**
     * Determines whether the given input string is valid XML.
     *
     * @param string $input Input string to evaluate
     * @return bool True if valid XML, false otherwise
     */
    private static function isInputXml(string $input): bool
    {
        libxml_use_internal_errors(true);
        $xml = simplexml_load_string(self::sanitizeXml($input));

        return $xml !== false;
    }

    /**
     * Converts a JSON string into an associative array.
     *
     * @param string $json JSON string
     * @return array Parsed array or empty array on failure
     */
    private static function convertJsonToArray(string $json): array
    {
        /** @var array|mixed $array */
        $array = json_decode(self::sanitizeJson($json), true);

        return is_array($array) ? $array : [];
    }

    /**
     * Converts an XML string into an associative array.
     *
     * @param string $xml XML string
     * @return array Parsed array representation of the XML
     */
    private static function convertXmlToArray(string $xml): array
    {
        return XmlHelper::xmlToArray(self::sanitizeXml($xml));
    }

    /**
     * Converts an associative array into a normalized audit stdClass object.
     *
     * - Moves 'sys' key to 'system'
     * - Skips numeric keys and empty values
     * - Normalizes 'item' collections into arrays
     *
     * @param array $data Input data array
     * @return stdClass Normalized audit object
     */
    private static function arrayToAudit(array $data): stdClass
    {
        $audit = new stdClass();

        if (isset($data['sys']) && is_array($data['sys'])) {
            $system = $data['sys'];
            unset($data['sys']);
            $data = array_merge(['system' => $system], $data);
        }

        foreach ($data as $section => $value) {
            if (is_numeric($section) || $value === '') {
                continue;
            }

            if (is_array($value) && isset($value['item'])) {
                if (! is_array($value['item'])) {
                    continue;
                }
                $isAssoc = array_keys($value['item']) !== range(0, count($value['item']) - 1);
                $value   = $isAssoc ? [$value['item']] : $value['item'];
                $items   = self::arrayToObjects($value);

                if ($section === 'user') {
                    foreach ($items as $item) {
                        if (isset($item->keys->key) && is_array($item->keys->key)) {
                            $item->keys = $item->keys->key;
                        }
                    }
                }

                $audit->{$section} = $items;
            } elseif (is_array($value)) {
                $audit->{$section} = self::arrayToObjects($value);
            } elseif (is_scalar($value)) {
                $audit->{$section} = $value;
            }
        }

        return $audit;
    }

    /**
     * Converts an array into generic stdClass object(s).
     *
     * Associative arrays are converted to a single stdClass instance,
     * while indexed arrays are converted to an array of stdClass instances.
     *
     * @param array $data The input array
     * @return string|stdClass|stdClass[] A stdClass object or an array of stdClass objects
     */
    private static function arrayToObjects(array $data): string|array|stdClass
    {
        $isList = array_is_list($data);

        if ($isList) {
            return array_map(function (mixed $item) {
                return is_array($item) ? self::arrayToObjects($item) : $item;
            }, $data);
        }

        $object = new stdClass();

        foreach ($data as $key => $value) {
            if (is_numeric($key) || $value === '') {
                continue;
            }

            if (is_array($value)) {
                $object->{$key} = self::arrayToObjects($value);
            } elseif (is_scalar($value)) {
                $object->{$key} = $value;
            }
        }

        return $object;
    }
}
