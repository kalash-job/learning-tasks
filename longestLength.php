<?php

namespace App\Solution;

// BEGIN (write your solution here)
function longestLength(string $string): int
{
    $tempArray = [];
    $maxSubstring = 0;
    $count = 0;
    for ($j = 0, $length = strlen($string); $j < $length; $j++) {
        for ($i = $j, $length = strlen($string); $i < $length; $i++) {
            if (in_array($string[$i], $tempArray)) {
                $tempArray = [];
                $tempArray[] = $string[$i];
                $maxSubstring = $maxSubstring < $count ? $count : $maxSubstring;
                $count = 1;
            } else {
                $count++;
                $tempArray[] = $string[$i];
            }
        }
        $tempArray = [];
        $maxSubstring = $maxSubstring < $count ? $count : $maxSubstring;
        $count = 0;
    }
    return $maxSubstring;
}
// END

