<?php
declare(strict_types=1);

namespace CodelyTv\Tests\User;

use CodelyTv\User\AccessLevel;
use CodelyTv\User\User;
use CodelyTv\User\UserId;
use CodelyTv\User\UserName;
use Faker\Factory;

final class UserMother
{

    public static function create(UserId $id, UserName $name, AccessLevel $accessLevel): User
    {
        return new User($id, $name, $accessLevel);
    }

    public static function withAccessLevel(AccessLevel $accessLevel): User
    {
        $faker = Factory::create();
        return self::create(new UserId($faker->uuid()), new UserName($faker->name), $accessLevel);
    }

    public static function random(): User
    {
        $faker = Factory::create();
        return self::create(
            new UserId($faker->uuid()),
            new UserName($faker->name),
            new AccessLevel($faker->numberBetween(1, 3))
        );
    }
}
