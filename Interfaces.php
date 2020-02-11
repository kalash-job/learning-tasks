<?php

namespace App\Points;

function makeDecartPoint($x, $y)
{
     return [
         'angle' => atan2($y, $x),
         'radius' => sqrt($x ** 2 + $y ** 2)
     ];
}

// BEGIN (write your solution here)
function getRadius($point)
{
    return $point['radius'];
}

function getAngle($point)
{
    return $point['angle'];
}

function getX(array $point)
{
    return getRadius($point) * cos(getAngle($point));
}

function getY(array $point)
{
    return getRadius($point) * sin(getAngle($point));
}
// END

