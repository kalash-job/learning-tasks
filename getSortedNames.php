<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getSortedNames(array $users): array
{
    $result = [];
    foreach ($users as ['name' => $name]) {
        $result[] = $name;
    }
    sort($result);
    return $result;
}
// END

