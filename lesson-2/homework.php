<?php

// 1

echo "Задание 1" . "<br><br>";

/*
function func($a, $b) {
  echo $a . "<br>" . $b . "<br>";
  if ($a >= 0 && $b >= 0) {
    return "Разность неотрицательных чисел равна " . ($a - $b);
  } elseif ($a < 0 && $b < 0) {
    return "Произведение отрицательных чисел равно " . ($a * $b);
  } else {
    return "Сумма положительного (или 0) и отрицательного чисел равна " . ($a + $b);
  }
}

echo func(rand(-10, 10), rand(-10, 10));
*/


$a = rand(-10, 10);
$b = rand(-10, 10);

echo $a . "<br>" . $b . "<br>";

if ($a >= 0 && $b >= 0) {
  echo "Разность неотрицательных чисел равна " . ($a - $b);
} elseif ($a < 0 && $b < 0) {
  echo "Произведение отрицательных чисел равно " . ($a * $b);
} else {
  echo "Сумма положительного (или 0) и отрицательного чисел равна " . ($a + $b);
}


echo "<br><br><br><br>";

// 2
echo "Задание 2" . "<br><br>";

$a = rand(0, 15);

echo "\$a = $a" . "<br><br>" . "Вывод чисел: switch - ";

$c = $a;
switch ($c) {
  case 1:
    echo $c++ . " ";
  case 2:
    echo $c++ . " ";
  case 3:
    echo $c++ . " ";
  case 4:
    echo $c++ . " ";
  case 5:
    echo $c++ . " ";
  case 6:
    echo $c++ . " ";
  case 7:
    echo $c++ . " ";
  case 8:
    echo $c++ . " ";
  case 9:
    echo $c++ . " ";
  case 10:
    echo $c++ . " ";
  case 11:
    echo $c++ . " ";
  case 12:
    echo $c++ . " ";
  case 13:
    echo $c++ . " ";
  case 14:
    echo $c++ . " ";
  case 15:
    echo 15;
}

echo "<br><br><br>" . "Вывод чисел: рекурсия - ";
echo rec($a) . "<br><br><br>";

function rec($n)
{
  if ($n == 15) {
    echo 15;
    return;
  } else {
    echo $n++ . " ";
    rec($n);
  }
}

echo "<br><br><br><br>";


// 3
echo "Задание 3" . "<br><br>";

function add($a, $b)
{
  return $a + $b;
}

function subtract($a, $b)
{
  return $a - $b;
}

function mult($a, $b)
{
  return $a * $b;
}

function div($a, $b)
{
  echo "Первое число: $a, второе число: $b. ";
  return ($b == 0) ? "Делить на 0 нельзя!" : "Результат: " . number_format($a / $b, 2);
}

echo add(4, 6) . "<br>";
echo subtract(8, 3) . "<br>";
echo mult(5, 3) . "<br>";
echo div(rand(0, 9), rand(0, 9)) . "<br>";

echo "<br><br><br><br>";


// 4
echo "Задание 4" . "<br><br>";

$arr = array("add", "subtract", "mult", "div");
// не проходили, но оч хотелось реализовать рандомный выбор операции..

function mathOperation($arg1, $arg2, $operation)
{
  echo $arg1 . " " . $arg2 . " " . $operation . "<br><br>";
  switch ($operation) {
    case "add":
      return add($arg1, $arg2);
      break;
    case "subtract":
      return subtract($arg1, $arg2);
      break;
    case "mult":
      return mult($arg1, $arg2);
      break;
    case "div":
      return div($arg1, $arg2);
      break;
    default:
      return "Введите правильную операцию!";
  }
}

echo "Результат вычисления: " . mathOperation(rand(-10, 10), rand(-10, 10), $arr[array_rand($arr)]);

echo "<br><br><br><br>";


// 6
echo "Задание 6" . "<br><br>";
//$res = 1;
//
//function power($val, $pow, &$res) {
//  echo $val, $pow, $res . "<br>";
//  if ($pow == 0) {
//    return $res;
//  } else {
//    $res = $val;
//    $res *= $val;
//    power($res, $pow - 1, $res);
//  }
////  } elseif ($pow < 0) {
////    $pow *= -1;
////    $res = 1 / power($val, $pow);
////  }
//}
//
//echo power(2, 3, $res); //8













$res = 1;
$koef = 1;

function power($val, $pow, &$res, &$koef) {
  echo $val . " " . $pow . " " . $res . "<br>";

  if ($res == 1) {
    if ($pow == 1) {
      return $val;
    } elseif ($pow == 0) {
      return 1;
    } elseif ($pow < 0) {
      $pow *= -1;
      $koef++;
      power($val, $pow, $res, $koef);
    }
    $res = $val * $val;
  } else {
    $res *= $val;
  }
  $pow--;
  if ($pow == 1) {
    if($koef == 2) {
      $res = 1 / $res;
    }
    echo "Результат $res" . "<br>";
    return $res;
  }
//echo "Результат $res" . "<br>";

power($val, $pow, $res, $koef);
}


echo "Итоговый результат: " . power(2, -4, $res, $koef);    //8 Подскажите плз в комментариях, почему сама функция ->
// ->  power(2, 3, $res) не всегда возвращает $res, я ведь return там сделала, в зависимости ->
// -> от параметров то возвращает, то нет



