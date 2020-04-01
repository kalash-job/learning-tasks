<?php

namespace App\Snail;

// BEGIN (write your solution here)
function buildSnailPath(array $matrix): array
{
    $result = $matrix[0];
    $length = count($matrix[0]);
    $height = count($matrix);
    for ($i = $length - 1, $j = 1; $i > $length / 2, $j <= $height / 2; $i--, $j++) {
        for ($g = $j; $g <= $height - $j; $g++) {
            $result[] = $matrix[$g][$i];
        }
        for ($k = $i - 1; $k >= $length - $i - 1; $k--) {
            $result[] = $matrix[$height - $j][$k];
        }
        for ($m = $height - $j - 1; $m >= $j; $m--) {
            $result[] = $matrix[$m][$j - 1];
        }
        for ($n = $length - $i; $n < $i; $n++) {
            $result[] = $matrix[$j][$n];
        }
    }
    return $result;
}
// END

