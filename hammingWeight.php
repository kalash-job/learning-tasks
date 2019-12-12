<?php

namespace App\Solution;

// BEGIN (write your solution here)
function hammingWeight(int $number)
{
    $string = (string) decbin($number);
    return substr_count($string, '1');
}
// END
