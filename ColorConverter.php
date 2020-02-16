<?php

namespace App\Solution;

// BEGIN (write your solution here)
function hexToRgb(string $colorHex): array
{
    $red = hexdec(substr($colorHex, 1, 2));
    $green = hexdec(substr($colorHex, 3, 2));
    $blue = hexdec(substr($colorHex, 5, 2));
    return ['r' => $red, 'g' => $green, 'b' => $blue];
}

function rgbToHex(...$colorRgb): string
{
    $colorHex = array_map(function ($color) {
        $colorInHex = dechex($color);
        return strlen($colorInHex) === 1 ? "0$colorInHex" : $colorInHex;
    }, $colorRgb);
    return '#' . implode('', $colorHex);
}

// END

