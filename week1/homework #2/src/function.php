<?php
// Задание #1

$arrays = ['Привет', 'Как дела?', 'Мир'];

function task1(array $strings, bool $return = true) {
  $result = implode("\n", array_map(function(string $str) {
    return "<p>$str</p>";
  }, $strings));

  if($return) {
    return $result;
  } 
  echo $result;

};

//Задание 2
function task2(string $action, ...$args) {
  
  foreach($args as $n => $arg) {
    if(!is_int($arg) && !is_float($arg)) {
      trigger_error("Неверный тип аргумента $n");
      return 'ERROR: Неверный тип аргумента';
    }
  }
  
  switch($action) {
    case '+':
      return array_sum($args);
    case '-':
      return array_shift($args) - array_sum($args);
    case '/':
      $result = array_shift($args);
      foreach($args as $n => $arg) {
        $arg !== 0 ? $result = $result / $arg : trigger_error("Деление на 0" . ($n + 1));
        return 'ERROR: Деление на 0';
      }
      return $result;
    case '*':
      $result = 1;
      foreach($args as $arg) {
        $result *= $arg;
      }

      return $result;
    default: 
      return 'ERROR - передано неизвестное действие';
  } 
};

//Задание 3
function task3(int $a, int $b) {

  if($a < 0 || $b < 0) {
    trigger_error('Аргументы отрицательные');
    return false;
  }

  $result = '<table>';
  for ($i = 1; $i <= $a; $i++) {
    $result .= '<tr>';
    for ($j = 1; $j <= $b; $j++) {
      $result .= '<td>';
      $result .= $i * $j;
      $result .= '</td>';
    }
    $result .= '</tr>';
  };
  $result .= '</table>';
  echo $result;
};

function task4() {
  date_default_timezone_set('Asia/Bangkok');
  echo date('d.m.Y H:i');
  echo strtotime('24.02.2016 00:00:00');
  echo '<br>';
  echo date('Y-m-d H:i:s', 1456261200);
  echo '<br>';
};

function task5() {
  $string = 'Карл у Клары украл Кораллы';
  echo str_replace('К','', $string);
  echo '<br>';
  echo '<br>';
  $string2 = 'Две бутылки лимонада';
  echo str_replace('Две','Три', $string2);
};

function task6() {
  $fileName = 'test.txt';
  file_put_contents($fileName, 'Hello again!');

  function GetContentFromFile(string $fileName) {
    $fp = fopen($fileName, 'r');
    if(!$fp) {
      return false;
    }

    $str = '';
    while (!feof($fp)) {
      $str .= fgets($fp, 1024);
    }

    echo $str;
  }

  GetContentFromFile('test.txt');
};


?>