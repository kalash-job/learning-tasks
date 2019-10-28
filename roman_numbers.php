<?php
function translateToRomanNumbers ($arabicNumber)
{
  $thousands = intdiv($arabicNumber, 1000);
  $romanNumber = str_repeat('M', $thousands);
  $arabicNumber -= $thousands * 1000;
  $fivehundreds = intdiv($arabicNumber, 500);
  $romanNumber .= str_repeat('D', $fivehundreds);
  $arabicNumber -= $fivehundreds * 500;
  $hundreds = intdiv($arabicNumber, 100);
  $romanNumber .= str_repeat('C', $hundreds);
  $arabicNumber -= $hundreds * 100;
  $fifties = intdiv($arabicNumber, 50);
  $romanNumber .= str_repeat('L', $fifties);
  $arabicNumber -= $fifties * 50;
  $tens = intdiv($arabicNumber, 10);
  $romanNumber .= str_repeat('X', $tens);
  $arabicNumber -= $tens * 10;
  if($arabicNumber === 9) {
$romanNumber .= 'IX';
$arabicNumber -= 9;
  } elseif($arabicNumber >= 5) {
    $romanNumber .= 'V';
    $arabicNumber -= 5;
  }
  if($arabicNumber === 4) {
    $romanNumber .= 'IV';
  } else {
    $ones = intdiv($arabicNumber, 1);
    $romanNumber .= str_repeat('I', $ones);
  }
  return $romanNumber;
}
$arabicNumber = 3867;
print_r(translateToRomanNumbers($arabicNumber));
