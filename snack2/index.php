<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>

<body>
    <?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age =  $_GET["age"];

    $name_valid = strlen($name) > 3;
    $mail_valid = strpos($mail, "@") && strpos($mail, ".");
    $age_valid = ctype_digit($age);
    ?>
    <p>
        <?php
        echo "Ciao"." ".$name." ".$age." ".$mail;
        ?>
    </p>
    <p>
        <?php
        if ($name_valid && $mail_valid && $age_valid) {
            echo "Accesso riuscito";
        }
        else {
            echo "Accesso negato!";
        }
        ?>
    </p>

</body>

</html>