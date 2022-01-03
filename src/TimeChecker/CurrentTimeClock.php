<?php
declare(strict_types=1);

namespace CodelyTv\TimeChecker;

use DateTimeImmutable;

final class CurrentTimeClock implements Clock
{

    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable();
    }
}
