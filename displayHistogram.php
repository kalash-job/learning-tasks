<?php

namespace App\Solution;

// BEGIN (write your solution here)
function displayHistogram($rollsNumber, $rollDie)
{
    $results = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];
    for ($i = 0; $i < $rollsNumber; $i++) {
        $results[$rollDie()] += 1;
    }
    $maxResult = 0;
    $graphResults = [1 => [], 2 => [], 3 => [], 4 => [], 5 => [], 6 => []];
    foreach ($results as $key => $result) {
        if ($result > $maxResult) {
            $maxResult = $result;
        }
    }
    foreach ($results as $key => $result) {
        for ($i = $maxResult - $result; $i > 0; $i--) {
            $graphResults[$key][] = '   ';
        }
        $percent = round($result / $rollsNumber * 100);
        $graphResults[$key][] = $result === 0 ? '   ' : "$percent%";
        for ($i = $result; $i > 0; $i--) {
            $graphResults[$key][] = '###';
        }
    }

    $histogram = array_fill(0, $maxResult + 1, []);
    
    for ($i = 0; $i < $maxResult + 1; $i++) {
        foreach ($graphResults as $graphKey => $graphResult) {
            $histogram[$i][] = $graphResult[$i];
        }
    }
    $histogramsLines = [];

    foreach ($histogram as $stringsNum => $line) {
        $histogramsLines[$stringsNum] = implode(' ', $line);
    }
    $dashes = str_repeat('-', count($graphResults) * 3 + count($graphResults) - 1);
    $histogramsLines[] = $dashes;

    $numbers = [];

    foreach ($graphResults as $graphKey => $graphResult) {
        $numbers[] = " $graphKey ";
    }
    $histogramsLines[] = implode(' ', $numbers);

    foreach ($histogramsLines as $stringsNum => $line) {
        if ($stringsNum !== $maxResult + 2) {
            print_r("$line\n");
        } else {
            print_r($line);
        }
    }
}
// END

