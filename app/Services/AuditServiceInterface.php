<?php

declare(strict_types=1);

namespace App\Services;

use stdClass;

interface AuditServiceInterface
{
    /**
     * Convert the supplied input to an audit result.
     */
    public function convert(string $input, ?string $ip = '', ?int $discoveryId = 0): bool|stdClass;
}
