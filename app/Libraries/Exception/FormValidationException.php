<?php

declare(strict_types=1);

namespace App\Libraries\Exception;

use Exception;
use Throwable;

class FormValidationException extends Exception
{
    protected array $errors = [];

    public function __construct(array $errors = [], string $message = 'Validation failed.', int $code = 422, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getErrorMessages(): string
    {
        return implode(PHP_EOL, array_values($this->errors));
    }

    public static function forField(string $field, string $message): self
    {
        return new self([$field => $message]);
    }
}