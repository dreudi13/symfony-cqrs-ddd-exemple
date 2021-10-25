<?php

declare(strict_types=1);

namespace Common\Command;

class CommandResponse implements CommandResponseInterface
{
    /**
     * @param mixed[] $errors
     * @param string|null $value
     * @param string $status
     */
    private function __construct(
        private array $errors = [],
        private ?string $value = null,
        private string $status = '',
    ) {
    }

    /** @param string $value */
    public static function withValue($value): self
    {
        $commandResponse = new self(value: $value, status: self::STATUS_OK);

        return $commandResponse;
    }

    /** @param mixed[] $errors */
    public static function withErrors(array $errors): self
    {
        $commandResponse = new self(errors: $errors, status: self::STATUS_NOT_OK);

        return $commandResponse;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    /** @return mixed[] */
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }
}
