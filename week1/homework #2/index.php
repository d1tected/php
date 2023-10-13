<?php

include('./src/function.php');
$operatorsForMockTask2 = ['+', '-', '/', '*'];

$mockTask1 = ['Привет', 'Как дела?', 'Мир'];
$mockTask2 = [$operatorsForMockTask2[array_rand($operatorsForMockTask2)],rand(1,15),rand(1,15)];
$mockTask3 = [rand(1,10),rand(1,10)];

echo task1($mockTask1);
echo "<br />\n";
echo task2(...$mockTask2);
echo "<br />\n";
echo "<br />\n";
task3(...$mockTask3);
echo "<br />\n";
echo "<br />\n";
task4();
echo "<br />\n";
echo "<br />\n";
task5();
echo "<br />\n";
echo "<br />\n";
task6();
echo "<br />\n";
echo "<br />\n";
?>