<?php require_once "2_function.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h4>Dane użytkownika</h4>

        <form class="" action="" method="post">
            <input type="text" name="name" placeholder="Imię" value=""><br><br>
            <input type="text" name="surname" placeholder="Nazwisko" value=""><br><br>
            <input type="submit" name="send" value="Wyślij dane">
        </form>

        <?php

            if(!empty($_POST['name']) && !empty($_POST['surname'])) {
                echo "<hr>" . show($_POST['name'], $_POST['surname']);
            }

         ?>
    </body>
</html>
