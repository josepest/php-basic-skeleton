<?php
declare(strict_types=1);

namespace CodelyTv\TimeChecker;

final class MorningChecker
{
    private const MIN_HOUR_MORNING = 9;
    private const MAX_HOUR_MORNING = 12;

    private Clock $clock;

    public function __construct(Clock $clock)
    {
        $this->clock = $clock;
    }

    public function check(): bool
    {
        $currentHour = $this->clock->now()->format('H');
        return $currentHour >= self::MIN_HOUR_MORNING && $currentHour <= self::MAX_HOUR_MORNING;
    }
}
