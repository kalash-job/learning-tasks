<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getSameParity($numbers)
{
    if (empty($numbers)) {
        return [];
    }
    $firstEven = $numbers[0] % 2 === 0;
    return array_values(array_filter($numbers, function ($number) use ($firstEven) {
        return $firstEven === ($number % 2 === 0);
    }));
}
// END

