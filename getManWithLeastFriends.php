<?php

namespace App\Users;

use Funct\Collection;

// BEGIN (write your solution here)
function getManWithLeastFriends($users)
{
    if (empty($users)) {
        return null;
    }
    return Collection\minValue($users, function ($user) {
        return count($user['friends']);
    });
}
// END

