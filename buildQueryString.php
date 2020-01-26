<?php

namespace App\AssociativeArrays;

// BEGIN (write your solution here)

function buildQueryString(array $queryStrings): string
{
    ksort($queryStrings);
    $queryString = [];
    foreach ($queryStrings as $key => $value) {
        $queryString[] = "$key=$value";
    }
    return implode('&', $queryString);
}
// END

