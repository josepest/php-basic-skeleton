<?php
declare(strict_types=1);

namespace CodelyTv\User;

final class User
{
    private const MIN_LEVEL_TO_EDIT = 3;

    private UserId      $id;
    private UserName    $name;
    private AccessLevel $accessLevel;

    public function __construct(UserId $id, UserName $name, AccessLevel $accessLevel)
    {
        $this->id          = $id;
        $this->name        = $name;
        $this->accessLevel = $accessLevel;
    }

    public function getId(): UserId
    {
        return $this->id;
    }

    public function getName(): UserName
    {
        return $this->name;
    }

    public function getAccessLevel(): AccessLevel
    {
        return $this->accessLevel;
    }

    public function canEditVideo(): bool
    {
        return $this->accessLevel->getValue() >= self::MIN_LEVEL_TO_EDIT;
    }
}
