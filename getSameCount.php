<?php

namespace App\Arrays;

// BEGIN (write your solution here)

function getSameCount(array $arrayFirst, array $arraySecond): int
{
    $result = 0;
    if (empty($arrayFirst) || empty($arraySecond)) {
        return $result;
    }
    $arrayFirstUnicue = array_unique($arrayFirst);
    $arraySecondUnicue = array_unique($arraySecond);
    foreach ($arrayFirstUnicue as $itemFromFirst) {
        foreach ($arraySecondUnicue as $itemFromSecond) {
            if ($itemFromFirst === $itemFromSecond) {
                $result++;
            }
        }
    }
    return $result;
}
// END

