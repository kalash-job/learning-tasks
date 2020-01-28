<?php

namespace App\Prime;

// BEGIN (write your solution here)
function isPrime(int $number): bool
{
    if ($number % 2 === 0 && $number !== 2) {
        return false;
    } elseif ($number <= 1) {
        return false;
    }
    for ($i = 3, $limit = sqrt($number); $i <= $limit; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function sayPrimeOrNot(int $number)
{
    $result = isPrime($number) ? 'yes' : 'no';
    print_r($result);
}
// END

