<?php

namespace App\Solution;

// BEGIN (write your solution here)
function multiply(array $matrixA, array $matrixB): array
{
    $newHeight = count($matrixA);
    $newWidth = count($matrixB[0]);
    $width = count($matrixB);
    $result = array_fill(0, $newHeight, []);
    foreach ($result as $key => $line) {
        $result[$key] = array_fill(0, $newWidth, 0);
    }
    
    foreach ($result as $str => $line) {
        foreach ($line as $index => $element) {
            $value = 0;
            for ($i = 0; $i < $width; $i++) {
                $value += $matrixB[$i][$index] * $matrixA[$str][$i];
            }
            $result[$str][$index] = $value;
        }
    }
    return $result;
}
// END

