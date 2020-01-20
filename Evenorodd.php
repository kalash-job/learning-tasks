<?php

function odd_or_even(array $a): string {
  $sum = 0;
  if (empty($a)) {
    return 'even';
  }
  foreach ($a as $number) {
    $sum += $number;
  }
  return $sum % 2 === 0 ? 'even' : 'odd';
}
