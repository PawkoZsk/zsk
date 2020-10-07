<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dołączanie plików</title>
  </head>
  <body>
    <h3>Początek pliku</h3>

      <?php
        include './3_1_file.php';
        include_once './3_1_file.php';    // błąd w include - Warning (plik wykonuje się dalej)

        require_once './3_1_file.php';    // błąd w require - Fatal error i zatrzymanie wykonywania pliku
       ?>

    <h3>Koniec pliku</h3>
  </body>
</html>
