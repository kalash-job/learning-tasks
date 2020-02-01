<?php

namespace App\Users;

use function Funct\Collection\flatten;

// BEGIN (write your solution here)
function getChildren(array $users)
{
    $children = array_map(function ($users) {
        return $users['children'];
    }, $users);
    return flatten($children);
}
// END

