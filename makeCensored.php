<?php

namespace App\Strings;

// BEGIN (write your solution here)
function makeCensored(string $sentence, array $censoredWords)
{
    if (empty($censoredWords)) {
        return $sentence;
    }
    $sentenceArray = explode(' ', $sentence);
    $newSentenceArray = [];
    foreach ($censoredWords as $numberOfWord => $word) {
        foreach ($sentenceArray as $index => $partOfSentence) {
            if ($numberOfWord >= 1) {
                $newSentenceArray[$index] = $word === $partOfSentence ? '$#%!' : $newSentenceArray[$index];
            } else {
                $newSentenceArray[$index] = $word === $partOfSentence ? '$#%!' : $partOfSentence;
            }
        }
    }
    return implode(' ', $newSentenceArray);
}
// END

