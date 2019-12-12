<?php

namespace App\Solution;

// BEGIN (write your solution here)
function lengthOfLastWord(string $string)
{
    $string = trim($string);
    for ($i = -1, $limit = -strlen($string) - 1; $i >= $limit; $i--) {
        if (empty($string[$i]) || $string[$i] == ' ') {
            return -$i - 1;
        }
    }
}
// END

