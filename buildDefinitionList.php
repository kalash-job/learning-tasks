<?php

namespace App\Strings;

// BEGIN (write your solution here)
function buildDefinitionList($definitions)
{
    $result = '';
    if (empty($definitions)) {
        return $result;
    }
    $resultArray = [];
    foreach ($definitions as $value) {
        $resultArray[] = "<dt>{$value[0]}</dt><dd>{$value[1]}</dd>";
    }
    $result = implode('', $resultArray);
    $result = "<dl>{$result}</dl>";
    return $result;
}
// END

