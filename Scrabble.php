<?php

namespace App\Solution;

// BEGIN (write your solution here)
function getFrequencyOfLetters(string $word): array
{
    $letters = str_split(strtolower($word));
    $result = [];
    foreach ($letters as $letter) {
        if (array_key_exists($letter, $result)) {
            $result[$letter]++;
        } else {
            $result[$letter] = 1;
        }
    }
    return $result;
}

function scrabble(string $symbols, string $word): bool
{
    if (empty($symbols) && !empty($word)) {
        return false;
    }
    $charactersFromSymbols = getFrequencyOfLetters($symbols);
    $charactersFromWord = getFrequencyOfLetters($word);
    foreach ($charactersFromWord as $character => $number) {
        if (!array_key_exists($character, $charactersFromSymbols)) {
            return false;
        } elseif ($charactersFromSymbols[$character] < $number) {
            return false;
        }
    }
    return true;
}
// END

