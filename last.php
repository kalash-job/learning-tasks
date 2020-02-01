<?php

namespace App\Strings;

function run(string $text)
{
    // BEGIN (write your solution here)
    $last = function ($text) {
        return $text[-1] ?? null;
    };
    // END

    return $last($text);
}

