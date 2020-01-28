<?php

namespace App\Arrays;

function union($first, ...$rest)
{
    // BEGIN (write your solution here)
    $unionArray = array_merge($first, ...$rest);
    $sharedArray = array_unique($unionArray);
    return array_values($sharedArray);
    // END
}

