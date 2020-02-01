<?php

namespace App\Users;

use function Funct\Collection\firstN;

// BEGIN (write your solution here)
function takeOldest(array $users, int $num = 1)
{
    usort($users, function ($first, $second) {
        return strtotime($first['birthday']) <=> strtotime($second['birthday']);
    });
    return firstN($users, $num);
}
// END

