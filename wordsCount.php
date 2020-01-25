<?php

namespace App\Solution;

// BEGIN (write your solution here)
function wordsCount(string $text): array
{
    if (empty($text)) {
        return [];
    }
    $words = explode(' ', $text);
    $result = [];
    foreach ($words as $word) {
        if (!empty(trim($word))) {
            if (isset($result[$word])) {
                $result[$word]++;
            } else {
                $result[$word] = 1;
            }
        }
    }
    return $result;
}
// END

