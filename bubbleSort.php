<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function bubbleSort(array $array): array
{
    $needSorting = true;
    while ($needSorting === true) {
        $size = count($array);
        $needSorting = false;
        for ($i = 0; $i < $size - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $needSorting = true;
                $temp = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $temp;
            }
        }
        $size--;
    }
    return $array;
}
// END

