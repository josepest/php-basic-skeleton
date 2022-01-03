<?php
declare(strict_types=1);

namespace CodelyTv;

final class IdeaTest
{
    private string $myarg;
    private string $myarg2;
    private int $myarg3;

    public function __construct(string $myarg, string $myarg2, int $myarg3)
    {
        $this->myarg = $myarg;
        $this->myarg2 = $myarg2;
        $this->myarg3 = $myarg3;
    }
}
