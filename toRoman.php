<?php

namespace App\Solution;

// BEGIN (write your solution here)
function toRoman(int $number)
{
    $result = [];
    $romanNumbers = [
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        10 => 'X',
        5 => 'V',
        1 => 'I'
    ];
    $step = 0;
    foreach ($romanNumbers as $arabicNumber => $romanNumber) {
        if ($number >= $arabicNumber && $step % 2 === 0) {
            $count = intdiv($number, $arabicNumber);
            $result[] = str_repeat($romanNumber, $count);
            $number -= $arabicNumber * $count;
        } elseif ($number >= $arabicNumber) {
            $result[] = $romanNumber;
            $number -= $arabicNumber;
        }
        if ($number >= $arabicNumber - $arabicNumber / 10  && $step % 2 === 0) {
            $result[] = $romanNumbers[$arabicNumber / 10];
            $result[] = $romanNumber;
            $number -= ($arabicNumber - $arabicNumber / 10);
        } elseif ($number >= $arabicNumber - $arabicNumber / 5  && $step % 2 !== 0) {
            $result[] = $romanNumbers[$arabicNumber / 5];
            $result[] = $romanNumber;
            $number -= ($arabicNumber - $arabicNumber / 5);
        }
        $step++;
    }
    return implode('', $result);
}
// END

