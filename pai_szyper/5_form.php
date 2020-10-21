<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Formularze</title>
    </head>
    <body>
        <h4>Formularze</h4>
        <?php

            if(!empty($_GET['surname']) && !empty($_GET['name']) && !empty($_GET['city']) && !empty($_GET['color'])) {
                $surname = $_GET['surname'];
                echo <<<DATA
                    Nazwisko: $surname <br>
                    Imię: {$_GET['name']} <br>
                    Miasto: {$_GET['city']} <br>
                    Kolor: {$_GET['color']} <br>
                DATA;
                echo "<a href=\"./5_form.php\">Wstecz</a>";
            } else {
                echo <<<FORM
                <form method="get">
                    <input type="text" name="surname" value="" placeholder="Nazwisko" autofocus> <br><br>
                    <input type="text" name="name" value="" placeholder="Imię" autofocus> <br><br>
                    <input type="text" name="city" value="" placeholder="Miasto" autofocus> <br><br>
                    <input type="color" name="color" value="" placeholder="Kolor" autofocus> <br><br>
                    <input type="submit" name="" value="Wyślij dane"><hr>
                </form>
                FORM;
            }

         ?>

    </body>
</html>
