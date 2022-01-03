<?php
declare(strict_types=1);

namespace CodelyTv\User;

final class UserName
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getValue(): string
    {
        return $this->name;
    }
}
