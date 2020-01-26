<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function findWhere(array $collection, array $pairs)
{
    foreach ($collection as $element) {
        $success = true;
        foreach ($pairs as $key => $value) {
            if ($element[$key] !== $value) {
                $success = false;
                break;
            }
        }
        if ($success === true) {
            return $element;
        }
    }
}
// END
