<?php

namespace App\Strings;

// BEGIN (write your solution here)
function checkIfBalanced($expression)
{
    $openSymbol = '(';
    $closeSymbol = ')';
    $stack = [];
    for ($i = 0, $length = strlen($expression); $i < $length; $i++) {
        if ($expression[$i] === $openSymbol) {
            array_push($stack, $expression[$i]);
        } elseif ($expression[$i] === $closeSymbol) {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }
    return empty($stack);
}
// END

