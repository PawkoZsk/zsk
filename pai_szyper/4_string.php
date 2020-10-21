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

    // usuwanie białych znaków

    $name = "Anna";
    $name1 = "  Anna ";
    echo strlen($name); //4
    echo strlen($name1); //7

    echo strlen(rtrim($name1)); //6
    echo strlen(ltrim($name1)); //5
    echo strlen(trim($name1)); //4

    // przeszukiwanie ciągów znaków

    $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
    $search = strstr($address, "tel");
    echo $search,'<br>'; //tel. (61) 123-45-67

    $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
    $search = strstr($address, "tel", true);
    echo $search,'<br>'; //Poznań ul. Szwajcarska 1,

    $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
    $search = stristr($address, "Tel");
    echo $search,'<br>'; //tel. (61) 123-45-67

    echo strstr('zsk@gmail.com', '@'),'<br>'; //@gmail.com
    echo strstr('zsk@gmail.com', 64),'<br>'; //@gmail.com

    $name = 'Janusz';
    echo substr($name, 2); //nusz
    echo substr($name, 2, 2); //nu

    echo substr(strstr('zsk@gmail.com', '@'), 1); //gmail.com

    // przetwarzanie ciągów znaków

    $replace = str_replace("%name%" , " Anna ", "Masz na imię: %name%");
    echo $replace,'<br>';

    $login = "bączek";
    echo strlen($login); //7
    echo mb_strlen($login); //6

    echo "<hr>Login: $login<br>";
    $censure = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
    $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

    $correctLogin = str_replace($censure, $replace, $login);
    echo "Poprawny login: $correctLogin";
?>
