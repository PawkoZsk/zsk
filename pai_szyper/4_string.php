<?php
  $text = <<<T
    zsk - Zespół
    Szkół
    Komunikacji<bt>
    T;

    echo $text . "<br>";
    echo nl2br($text) . "<br>";

    $name = 'jAnUsZ';
    echo strtolower($name) . "<br>";
    echo strtoupper($name) . "<br>";

    $name = 'jaNuSz koWaLski';

    echo ucfirst($name) . "<br>";
    echo ucwords($name) . "<br>";

  $name = <<<T
    janusz
    T;

    echo ucfirst(strtolower($name)) . "<br>";

    $lorem = <<<LOREM
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
    LOREM;

    echo $lorem;
    echo wordwrap($lorem, 40, '<br>');
    echo wordwrap($lorem, 40, '<hr>');

    // czyszczenie zawartości bufora

    ob_clean();   // czyszczenie ekranu
?>
