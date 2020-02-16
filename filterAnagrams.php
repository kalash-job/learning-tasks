<?php

namespace App\Solution;

// BEGIN (write your solution here)
function filterAnagrams(string $word, array $coll): array
{
    $letters = str_split($word);
    sort($letters);
    return array_values(array_filter($coll, function ($str) use ($letters) {
        $letters2 = str_split($str);
        sort($letters2);
        return $letters === $letters2;
    }));
}
// END

