<?php

namespace App\Strings;

// BEGIN (write your solution here)
function countUniqChars(string $string): int
{
    $length = strlen($string);
    $result = 0;
    $uniqueChars = [];
    if ($length === 0) {
        return $result;
    }
    for ($i = 0; $i < $length; $i++) {
        if (!in_array($string[$i], $uniqueChars)) {
            $result++;
            $uniqueChars[] = $string[$i];
        }
    }
    return $result;
}
// END

