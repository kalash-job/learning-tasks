<?php

namespace App\Nrzi;

// BEGIN (write your solution here)
function decode($signal)
{
    $values = preg_split("//u", $signal, -1, PREG_SPLIT_NO_EMPTY);
    return array_reduce(array_keys($values), function ($acc, $i) use ($values) {
        if ($i !== 0) {
            if ($values[$i - 1] === '|' && $values[$i] !== '|') {
                return "{$acc}1";
            } elseif ($values[$i - 1] !== '|' && $values[$i] !== '|') {
                return "{$acc}0";
            } else {
                return $acc;
            }
        } elseif ($values[$i] !== '|') {
            return "{$acc}0";
        } else {
            return $acc;
        }
    }, '');
}
// END

