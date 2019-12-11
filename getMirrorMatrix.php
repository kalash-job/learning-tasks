<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getMirrorMatrix(array $array): array
{
    $result = [];
    foreach ($array as $subArray) {
        $termArray = [];
        for ($i = 0, $limit = count($subArray) / 2; $i < $limit; $i++) {
            $termArray[] = $subArray[$i];
        }
        for ($i = (count($subArray) / 2 - 1); $i >= 0; $i--) {
            $termArray[] = $subArray[$i];
        }
        $result[] = $termArray;
    }
    return $result;
}
// END

