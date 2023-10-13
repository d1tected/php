<?php

include('./src/function.php');

$mockTask1 = ['Привет', 'Как дела?', 'Мир'];
$mockTask2 = ['+',10,5];
$mockTask3 = [5,5];

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