<?php
declare(strict_types=1);

namespace CodelyTv\User;

final class AccessLevel
{
    private int $accessLevel;

    public function __construct(int $accessLevel)
    {
        $this->accessLevel = $accessLevel;
    }

    public function getValue(): int
    {
        return $this->accessLevel;
    }
}
