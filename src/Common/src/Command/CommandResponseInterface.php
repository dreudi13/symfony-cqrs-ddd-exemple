<?php

namespace Common\Command;

use Common\Command\CommandResponse;

interface CommandResponseInterface
{
    public const STATUS_NOT_OK = 'not_ok';
    public const STATUS_OK = 'ok';

    public function getStatus(): string;
    /** @return mixed[] */
    public function getErrors(): array;
    public function getValue(): ?string;
}
