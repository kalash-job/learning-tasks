<?php

namespace App\Users;

// BEGIN (write your solution here)
function getMenCountByYear(array $users)
{
    $users = array_filter($users, function ($user) {
        return $user['gender'] === 'male';
    });
    $datesOfBirth = array_map(function ($user) {
        return $user['birthday'];
    }, $users);

    $yearsCounts = array_reduce($datesOfBirth, function ($acc, $date) {
        $datesTimestamp = strtotime($date);
        $year = date('Y', $datesTimestamp);
        if (array_key_exists($year, $acc)) {
            $acc[$year]++;
        } else {
            $acc[$year] = 1;
        }
        return $acc;
    }, []);
    return $yearsCounts;
}
// END

