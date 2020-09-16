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

 ?>
