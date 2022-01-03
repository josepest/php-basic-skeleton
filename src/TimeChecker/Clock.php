<?php
declare(strict_types=1);

namespace CodelyTv\TimeChecker;

use DateTimeImmutable;

interface Clock
{
    public function now(): DateTimeImmutable;
}
