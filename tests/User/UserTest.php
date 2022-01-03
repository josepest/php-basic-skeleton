<?php

namespace CodelyTv\Tests\User;

use CodelyTv\User\AccessLevel;
use CodelyTv\User\UserId;
use CodelyTv\User\UserName;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    /** @test */
    public function userCannotEditVideosWithoutRightAccessLevel(): void
    {
        $user = UserMother::withAccessLevel(new AccessLevel(1));

        self::assertSame(false, $user->canEditVideo());
    }

    /** @test */
    public function userCanEditVideosWithRightAccessLevel(): void
    {
        $user = UserMother::withAccessLevel(new AccessLevel(3));

        self::assertSame(true, $user->canEditVideo());
    }

    /** @test */
    public function userGetId(): void
    {
        $userId = new UserId('1');
        $user = UserMother::create(new UserId('1'), new UserName('Josep'), new AccessLevel(1));
        self::assertEquals($userId, $user->getId());
    }

    /** @test */
    public function userGetName(): void
    {
        $userName = new UserName('Josep');
        $user = UserMother::create(new UserId('1'), new UserName('Josep'), new AccessLevel(1));
        self::assertEquals($userName, $user->getName());
    }

    /** @test */
    public function userGetAccessLevel(): void
    {
        $accessLevel = new AccessLevel(1);
        $user = UserMother::create(new UserId('1'), new UserName('Josep'), new AccessLevel(1));
        self::assertEquals($accessLevel, $user->getAccessLevel());
    }

    /** @test */
    public function userNameGetValue(): void
    {
        $userName = new UserName('Josep');
        self::assertEquals($userName->getValue(), 'Josep');
    }

    /** @test */
    public function userIdGetValue(): void
    {
        $userId = new UserId('1');
        self::assertEquals($userId->getValue(), '1');
    }
}
