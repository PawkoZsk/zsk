<?php

  echo PHP_VERSION, '<br>';
  // echo phpinfo();

  // interpolacja - znak przecinka: ,

  echo 'a', 'b', 'c';   // show a, show b, show c | szybsze rozwiązanie (ale wolniejsze od heredoca)
  echo 'a' . 'b' . 'c'; // add a+b+c, show abc
  echo '<br>';
  // potęgowanie
  $pow = 2 ** 10;
  echo $pow . '<br>';  // 1024

  // operatory bitowe
  // and - &, or - |, not = ~, xor - ^, <<, >>
  $bin = 0b1010;
  echo $bin . '<br>';

  $bin = $bin << 2; // 101000
  echo $bin . '<br>';  // 40

  $bin = $bin >> 3;
  echo $bin . '<br>';

  // porównanie

  $x = 1;
  $y = 1.0;

  if ($x == $y) {
    echo '$x jest równa $y<br>';
  } else {
    echo '$x nie jest równa $y<br>';
  }

  echo gettype($x);
  echo '<br>';
  echo gettype($y);

  echo '<br>';

  if ($x === $y) {
    echo '$x jest identyczna $y<br>';
  } else {
    echo '$x nie jest identyczna $y<br>';
  }

  $x = 11;
  $y = 12;

  echo $x <=> $y;   // potrójny operator (jeśli $x jest mniejsze: 1, jeśli zmienne są równe: 0, jeśli $y jest większe: -1)
  echo "<br>";

  $x = 1;
  $x = $x++;
  echo $x . "<br>";  // 1
  $x=++$x;
  echo  $x . "<br>"; // 2
  $y=$x++;
  echo  $x . "<br>"; // 3
  echo  $y . "<br>"; // 2
  $y=++$x*2-1;
  echo $x . "<br>";  // 4
  echo $y . "<br>";  // 7

  // operatory rzutowania
  // bool, int, float, string, array, object, unset

  $test1 = '123abc4';
  $test2 = 0;
  $test3 = 20;

  echo 'Typ danych $test1: ', gettype($test1);
  $test1 = (int)$test1;
  echo "<br>$test1<br>";
  echo 'Typ danych $test1: ', gettype($test1), "<br>";

  echo 'Typ danych $test2: ', gettype($test2);
  $test2 = (bool)$test2;
  echo "<br>$test2<br>";
  echo 'Typ danych $test2: ', gettype($test2), "<br>";

  echo 'Typ danych $test3: ', gettype($test3);
  $test3 = (float)$test3;
  echo "<br>$test3<br>";
  echo 'Typ danych $test3: ', gettype($test3);

  // rozmiar typu integer
  echo "<br> rozmiar inta: ", PHP_INT_SIZE, "<hr>";

  // kontrola typu zmiennych
  /// is_int(), is_float(), is_numeric(), is_string(), is_bool(), is_null()

  $x = 1;
  echo is_int($x);
  echo is_float($x);
  echo is_numeric($x);
  $y = null;
  echo is_null($y);
  $w;
  echo @gettype($w);    // @ - operator ignorowania błędów
 ?>
