<?php
  $name = 'Janusz';
  $surname = 'Nowak';
  echo "Imię: $name<br>";
  echo "Nazwisko: $surname";

  // typy danych

  $prawda = true;
  $falsz = false;

  echo $prawda;
  echo $falsz . "<br>";

  $bin = 0b1001; // 11
  $oct = 012; // 10
  $dec = 12; // 10
  $hex = 0xC; // 10

  echo $bin . "<br>";
  echo $oct . "<br>";
  echo $dec . "<br>";
  echo $hex . "<br>";

  $name = 'Anna';
  $surname = 'Nowak';

  $text = <<<LABEL
      <hr>
      Heredoc 1: <br>
      Imię: $name
      <hr>
    LABEL;

    echo $text;

    // etykiety mogą się powtarzać, po nazwie etykiety nie może być spacji i komentarzy
    echo <<<L
      Heredoc 2: <br>
      Imię: $name <br>
      Nazwisko: $surname
      <hr>
    L;

    echo <<<'L'
      Nowdoc: <br>
      Imię: $name <br>
      Nazwisko: $surname
      <hr>
    L;

    $city = 'Poznań';
    echo "Nazwa zmiennej \$city: $city";
 ?>
