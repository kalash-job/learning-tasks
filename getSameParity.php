<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getSameParity($coll)
{
    if (empty($coll)) {
        return [];
    }
    $templateElement = $coll[0] % 2 === 0;
    $newColl = [];
    foreach ($coll as $item) {
        if (($item % 2 === 0) === $templateElement) {
            $newColl[] = $item;
        }
    }
    return $newColl;
}
// END

