<?php

namespace App\Arrays;

function getIntersectionOfSortedArray($arr1, $arr2)
{
    // BEGIN (write your solution here)
    $result = [];
    if (empty($arr1) || empty($arr2)) {
        return $result;
    }
    $length1 = count($arr1);
    $length2 = count($arr2);
    $i = 0;
    $j = 0;
    while ($i < $length1 && $j < $length2) {
        if ($arr1[$i] === $arr2[$j]) {
            $result[] = $arr1[$i];
            $i++;
            $j++;
        } elseif ($arr1[$i] < $arr2[$j]) {
            $i++;
        } else {
            $j++;
        }
    }
    return $result;
    // END
}

