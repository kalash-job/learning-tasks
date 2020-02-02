<?php

namespace App\Users;

use function Funct\Collection\flatten;

// BEGIN (write your solution here)
function getGirlFriends(array $users)
{
    $usersMapped = array_map(function ($user) {
        return $user['friends'];
    }, $users);
    $usersflattened = flatten($usersMapped);
    $usersFiltered = array_filter($usersflattened, function ($user) {
        return $user['gender'] === 'female';
    });
    return array_values($usersFiltered);
}
// END

