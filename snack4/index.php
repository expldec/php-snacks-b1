<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 4</title>
</head>

<body>
<?php
    $random_array = [];
    while (count($random_array) < 15) {
        $random_int = rand(0,100);
        if (!in_array($random_int, $random_array)) {
            $random_array[] = $random_int;
        }
    }
    // var_dump($random_array);
?>
<p><strong>I numeri random sono: </strong>
<?php 
echo join(", ",$random_array).".";
?>
</p>

</body>
</html>