<?php

namespace App\Rational;

use function App\Utils\gcd;

// BEGIN (write your solution here)
function makeRational(int $numer, int $denom)
{
    $divisor = gcd($numer, $denom);
    $numer = $numer / $divisor;
    $denom = $denom / $divisor;
    return "$numer/$denom";
}

function getNumer(string $num)
{
    return explode('/', $num)[0];
}

function getDenom(string $num)
{
    return explode('/', $num)[1];
}

function add(string $addendFirst, string $addendSecond)
{
    $numer = getNumer($addendFirst) * getDenom($addendSecond) + getNumer($addendSecond) * getDenom($addendFirst);
    $denom = getDenom($addendSecond) * getDenom($addendFirst);
    return makeRational($numer, $denom);
}

function sub(string $minuend, string $subtrahend)
{
    $numer = getNumer($minuend) * getDenom($subtrahend) - getNumer($subtrahend) * getDenom($minuend);
    $denom = getDenom($subtrahend) * getDenom($minuend);
    return makeRational($numer, $denom);
}
// END

function ratToString($rat)
{
    return getNumer($rat) . '/' . getDenom($rat);
}

