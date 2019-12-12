<?php

namespace App\Solution;

// BEGIN (write your solution here)
function compareVersion(string $version1, string $version2): int
{
    $versionFirst = explode('.', $version1);
    $versionSecond = explode('.', $version2);
    $result = 0;
    if ($versionFirst[0] > $versionSecond[0]) {
        $result = 1;
    } elseif ($versionFirst[0] < $versionSecond[0]) {
        $result = -1;
    } else {
        if ($versionFirst[1] > $versionSecond[1]) {
            $result = 1;
        } elseif ($versionFirst[1] < $versionSecond[1]) {
            $result = -1;
        }
    }
    return $result;
}
// END
// Есть короткое решение с оператором сравнения spaceship.
