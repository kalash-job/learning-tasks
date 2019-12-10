<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getChunked(array $array, int $sizeOfChunk): array
{
    $result = [];
    if (empty($array)) {
        return $result;
    }
    $size = count($array);
    $subArray = [];
    foreach ($array as $index => $value) {
        if (($index + 1) % $sizeOfChunk === 0) {
            $subArray[] = $value;
            $result[] = $subArray;
            $subArray = [];
        } else {
            $subArray[] = $value;
        }
    }
    if (!empty($subArray)) {
        $result[] = $subArray;
    }
    return $result;
}
// END

