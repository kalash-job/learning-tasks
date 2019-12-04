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
    foreach ($sentenceArray as $word) {
        $newSentenceArray[] = in_array($word, $censoredWords) ? '$#%!' : $word;
    }
    return implode(' ', $newSentenceArray);
}
// END

