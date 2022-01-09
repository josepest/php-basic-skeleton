<?php

declare(strict_types=1);

namespace CodelyTv\Tests;

use CodelyTv\Codelyber;
use PHPUnit\Framework\TestCase;

final class CodelyberTest extends TestCase
{
    /** @test */
    public function itShouldSayHelloWhenGreeting(): void
    {
        $codelyber = new Codelyber("Javi");

        self::assertEquals("CodelyTV", $codelyber->greet());
    }

    /** @test */
    public function itShouldReturnName(): void
    {
        $codelyber = new Codelyber("Javi");

        self::assertEquals("Javi", $codelyber->name());
    }

    /** @test
     * @group disabled
     */
    public function diferentAsertionsTest(): void
    {
        $codelyber  = new Codelyber("Josep");
        $codelyber2 = new Codelyber("Josep");

        self::assertEquals($codelyber, $codelyber2); // this is true
        self::assertSame($codelyber, $codelyber2); // this is false
    }
}
