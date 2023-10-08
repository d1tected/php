<?php
// Задание #5
$bmw = [
  'model' => 'X5',
  'speed' => 250,
  'doors' => 5,
  'year' => 2015
];

$toyota = [
  'model' => 'Mark II',
  'speed' => 280,
  'doors' => 5,
  'year' => 1993
];

$opel = [
  'model' => 'Astra',
  'speed' => 150,
  'doors' => 5,
  'year' => 2020
];


$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $name => $car) {
  print_r("CAR $name");
  echo "\r\n";

  print_r("{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}");
  echo "\r\n";
  echo "\r\n";
  ;
}
?>