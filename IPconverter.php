<?php

namespace App\Solution;

// BEGIN (write your solution here)
function ipToInt(string $ip): int
{
    $ip8 = explode('.', $ip);
    $ip32 = array_map(function ($partOfIp) {
        return str_pad(decbin($partOfIp), 8, "0", STR_PAD_LEFT);
    }, $ip8);
    return bindec(implode('', $ip32));
}

function intToIp(int $ip): string
{
    $ipBin = str_pad(decbin($ip), 32, "0", STR_PAD_LEFT);
    $ip32 = str_split($ipBin, 8);
    $ip8 = array_map(function ($partOfIp) {
        return bindec($partOfIp);
    }, $ip32);
    return implode('.', $ip8);
}
// END

