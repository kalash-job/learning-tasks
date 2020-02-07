<?php

namespace App\Segments;

use function App\Points\makeDecartPoint;
use function App\Points\getX;
use function App\Points\getY;

// BEGIN (write your solution here)
function makeSegment(array $point1, array $point2)
{
    return [
        'beginPoint' => $point1,
        'endPoint' => $point2
    ];
}

function getBeginPoint(array $segment)
{
    return $segment['beginPoint'];
}

function getEndPoint(array $segment)
{
    return $segment['endPoint'];
}

function getMidpointOfSegment(array $segment)
{
    $beginPoint = getBeginPoint($segment);
    $endPoint = getEndPoint($segment);
    $x = (getX($beginPoint) + getX($endPoint)) / 2;
    $y = (getY($beginPoint) + getY($endPoint)) / 2;
    return makeDecartPoint($x, $y);
}
// END

