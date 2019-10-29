<?php

function getRomanNumberElements($unit, $fiver, $ten, $number)
{
  if($number === 9) {
    return $unit . $ten;
  } elseif($number > 4) {
    return $fiver . str_repeat($unit, $number - 5);
  } elseif($number === 4) {
    return $unit . $fiver;
  } else {
    return $unit . str_repeat($unit, $number - 1);
  }
}

function translateToRomanNumbers ($arabicNumber)
{
  $romanNumber = '';
  if($arabicNumber > 999) {
    $numberOfThousands = intdiv($arabicNumber, 1000);
    $romanNumber .= getRomanNumberElements('M', '', '', $numberOfThousands);
    $arabicNumber -= $numberOfThousands * 1000;
  }
  if($arabicNumber > 99) {
    $numberOfHundreds = intdiv($arabicNumber, 100);
    $romanNumber .= getRomanNumberElements('C', 'D', 'M', $numberOfHundreds);
    $arabicNumber -= $numberOfHundreds * 100;
  }
  if($arabicNumber > 9) {
    $numberOfTens = intdiv($arabicNumber, 10);
    $romanNumber .= getRomanNumberElements('X', 'L', 'C', $numberOfTens);
    $arabicNumber -= $numberOfTens * 10;
  }
    if($arabicNumber > 0) {
    $romanNumber .= getRomanNumberElements('I', 'V', 'X', $arabicNumber);
  }
  return $romanNumber;
}

$arabicNumber = 3444;
print_r(translateToRomanNumbers($arabicNumber));
