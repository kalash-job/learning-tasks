<?php

namespace App\Rectangle;

use function App\Points\makeDecartPoint;
use function App\Points\getX;
use function App\Points\getY;
use function App\Points\getQuadrant;

// BEGIN (write your solution here)
function makeRectangle(array $point, $width, $height)
{
    return [
        'point' => $point,
        'width' => $width,
        'height' => $height
    ];
}

function getStartPoint(array $rectangle)
{
    return $rectangle['point'];
}

function getWidth(array $rectangle)
{
    return $rectangle['width'];
}

function getHeight(array $rectangle)
{
    return $rectangle['height'];
}

function containsOrigin(array $rectangle)
{
    $pointLeftUp = getStartPoint($rectangle);
    $pointRightDown = makeDecartPoint(getX($pointLeftUp) + getWidth($rectangle), getY($pointLeftUp) - getHeight($rectangle));
    return getQuadrant($pointLeftUp) === 2 && getQuadrant($pointRightDown) === 4;
}
// END

