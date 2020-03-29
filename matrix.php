<?php

namespace App\Solution;

// BEGIN (write your solution here)
function rotateLeft(array $matrix): array
{
    $x = count($matrix[0]);
    $y = count($matrix);
    $delta = $x - $y - 1;
    $matrixNew = array_fill(0, $x, []);
    foreach ($matrix as $keyX => $valueX) {
        foreach ($valueX as $keyY => $valueY) {
            $matrixNew[$y - $keyY + $delta][$keyX] = $valueY;
        }
    }
    return $matrixNew;
}

function rotateRight(array $matrix): array
{
    $x = count($matrix[0]);
    $y = count($matrix);
    $delta = $x - $y + 1;
    $matrixNew = array_fill(0, $x, []);
    foreach ($matrixNew as $key => $value) {
        $matrixNew[$key] = array_fill(0, $y, 0);
    }
    foreach ($matrix as $keyX => $valueX) {
        foreach ($valueX as $keyY => $valueY) {
            $matrixNew[$keyY][$x - $keyX - $delta] = $valueY;
        }
        $matrixNew[$keyY] = array_values($matrixNew[$keyY]);
    }
    return $matrixNew;
}
// END

