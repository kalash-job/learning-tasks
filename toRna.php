<?php

namespace App\Solution;

// BEGIN (write your solution here)
function toRna(string $dna): string
{
    $rna = [];
    $transcriptionKeys = ['G' => 'C', 'C' => 'G', 'T' => 'A', 'A' => 'U'];
    for ($i = 0, $length = strlen($dna); $i < $length; $i++) {
        $rna[] = $transcriptionKeys[$dna[$i]];
    }
    return implode("", $rna);
}
// END

