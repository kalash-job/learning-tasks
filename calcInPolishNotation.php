<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function calcInPolishNotation(array $array)
{
    $stack = [];
    foreach ($array as $value) {
        if (is_int($value) || is_float($value)) {
            array_push($stack, $value);
        } else {
            $b = array_pop($stack);
            $a = array_pop($stack);
            switch ($value) {
                case '+':
                    $c = $a + $b;
                    break;
                case '-':
                    $c = $a - $b;
                    break;
                case '*':
                    $c = $a * $b;
                    break;
                case '/':
                    $c = $a / $b;
                    break;
            }
            array_push($stack, $c);
        }
    }
    return array_pop($stack);
}
// END

