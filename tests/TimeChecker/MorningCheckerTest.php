<?php

namespace CodelyTv\Tests\TimeChecker;

use CodelyTv\TimeChecker\Clock;
use CodelyTv\TimeChecker\MorningChecker;
use PHPUnit\Framework\TestCase;

class MorningCheckerTest extends TestCase
{
    /** @test  */
    public function itShouldReturnTrueWhenItsMorning()
    {
        $clock = $this->createMock(Clock::class);
        $clock->expects($this->once())->method('now')->willReturn(new \DateTimeImmutable('2022-01-01 10:00:00'));
        $checker = new MorningChecker($clock);
        $this->assertTrue($checker->check());
    }

    /** @test  */
    public function itShouldReturnFalseWhenItsAfternoon()
    {
        $clock = $this->createMock(Clock::class);
        $clock->expects($this->once())->method('now')->willReturn(new \DateTimeImmutable('2022-01-01 21:00:00'));
        $checker = new MorningChecker($clock);
        $this->assertFalse($checker->check());
    }
}
