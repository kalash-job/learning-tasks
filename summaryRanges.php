<?php

namespace App\Solution;

// BEGIN (write your solution here)
function summaryRanges($numbers)
{
    $result = [];
    $startOfSpan = null;
    $endOfSpan = null;
    for ($i = 1, $length = count($numbers); $i < $length; $i++) {
        if ($numbers[$i] - $numbers[$i - 1] === 1 && ($startOfSpan === null)) {
            $startOfSpan = $numbers[$i - 1];
            $endOfSpan = $numbers[$i];
        } elseif ($numbers[$i] - $numbers[$i - 1] === 1) {
            $endOfSpan = $numbers[$i];
        } elseif ($startOfSpan !== null) {
            $result[] = "{$startOfSpan}->{$endOfSpan}";
            $startOfSpan = null;
            $endOfSpan = null;
        }
    }
    if ($endOfSpan !== null) {
        $result[] = "{$startOfSpan}->{$endOfSpan}";
    }
    return $result;
}
// END

