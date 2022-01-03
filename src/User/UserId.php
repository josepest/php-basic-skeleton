<?php
declare(strict_types=1);

namespace CodelyTv\User;

final class UserId
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
