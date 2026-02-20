<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\DiscoveryLogModel;
use stdClass;

final class AuditService implements AuditServiceInterface
{
    public function convert(string $input, ?string $ip = '', ?int $discoveryId = 0): bool|stdClass
    {
        $data = [];

        if ($this->isInputJson($input)) {
            $data = $this->convertJsonToArray($input);
        } else if ($this->isInputXml($input)) {
            $data = $this->convertXmlToArray($input);
        }

        $log = new stdClass();
        $log->discovery_id = $discoveryId ?? '';
        $log->ip           = $ip ?? '';
        $log->file         = 'AuditService';
        $log->function     = 'convert';
        $log->command      = '';
        $log->message      = '';

        /** @var DiscoveryLogModel $discoveryLogModel */
        $discoveryLogModel = model('DiscoveryLogModel');

        if ($data === []) {
            $log->severity       = 5;
            $log->message        = 'Could not convert string to JSON or XML';
            $log->command_output = 'Could not convert string to JSON or XML';
            $log->command_status = 'issue';
            $discoveryLogModel->create($log);
            log_message('error', 'Could not convert string to JSON or XML');
            return false;
        }

        $audit = $this->createAuditFromArray($data);

        if (empty($audit->system)) {
            log_message('error', 'Failed to parse input, $audit->system is empty');
            return false;
        }

        $log->ip           = !empty($audit->system->ip) ? (string) $audit->system->ip : '';
        $log->discovery_id = !empty($audit->system->discovery_id) ? (int) $audit->system->discovery_id : '';
        $log->device_id    = !empty($audit->system->id) ? (int) $audit->system->id : '';

        if (is_int($log->discovery_id) && is_int($log->device_id)) {
            $log->message  = 'Successfully converted audit result';
            $log->severity = 7;
            $log->status   = 'success';
            $discoveryLogModel->create($log);
        }

        return $audit;
    }

    private function sanitizeJson(string $json): string
    {
        $json = html_entity_decode($json);
        $json = preg_replace('/[[:^print:]]/', '', $json);
        $json = preg_replace('/[[:cntrl:]]/', '', $json);

        if (mb_detect_encoding($json) !== 'UTF-8') {
            log_message('debug', sprintf('Converting from %s to UTF8', mb_detect_encoding($json)));
            $json = mb_convert_encoding($json, 'UTF-8', mb_list_encodings());
        }

        return $json;
    }

    private function sanitizeXml(string $xml): string
    {
        $xml = html_entity_decode($xml);

        if (mb_detect_encoding($xml) !== 'UTF-8') {
            log_message('debug', sprintf('Converting from %s to UTF8', mb_detect_encoding($xml)));
            $xml = mb_convert_encoding($xml, 'UTF-8', mb_list_encodings());
        }

        $xml = iconv('UTF-8', 'UTF-8//TRANSLIT', $xml);
        $xml = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F-\x9F]/u', '', $xml);

        if (str_starts_with($xml, 'data=')) {
            log_message('debug', 'Removing "data=" from start of audit input');
            $xml = substr($xml, 5);
        }

        return $xml;
    }

    private function isInputJson(string $input): bool
    {
        /** @var array|mixed $data */
        $data = json_decode($this->sanitizeJson($input), true);

        return json_last_error() === JSON_ERROR_NONE && is_array($data);
    }

    private function isInputXml(string $input): bool
    {
        libxml_use_internal_errors(true);
        $xml = simplexml_load_string($this->sanitizeXml($input));

        return $xml !== false;
    }

    private function convertJsonToArray(string $json): array
    {
        /** @var array|mixed $array */
        $array = json_decode($this->sanitizeJson($json), true);

        return is_array($array) ? $array : [];
    }

    private function convertXmlToArray(string $xml): array
    {
        libxml_use_internal_errors(true);
        $element = simplexml_load_string($this->sanitizeXml($xml), 'SimpleXMLElement', LIBXML_NOCDATA);

        if ($element === false) {
            return [];
        }

        $json = json_encode($element);

        if (! is_string($json)) {
            return [];
        }

        /** @var array|mixed $array */
        $array = json_decode($json, true);
        return is_array($array) ? $array : [];
    }

    private function createAuditFromArray(array $data): stdClass
    {
        $audit = new stdClass();

        if (isset($data['sys']) && is_array($data['sys'])) {
            $system = $data['sys'];
            unset($data['sys']);
            $data = array_merge(['system' => $system], $data);
        }

        foreach ($data as $key => $value) {
            if (is_numeric($key) || empty($value)) {
                continue;
            }

            if (is_array($value) && isset($value['item'])) {
                if (! is_array($value['item'])) {
                    continue;
                }
                $isAssoc = array_keys($value['item']) !== range(0, count($value['item']) - 1);
                $items = $isAssoc ? [$value['item']] : $value['item'];
                $audit->{$key} = $items;
            } else if (is_array($value) || is_scalar($value)) {
                $audit->{$key} = $value;
            }
        }

        return $audit;
    }
}