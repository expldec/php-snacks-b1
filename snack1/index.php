<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>

<body>
    <?php
    $matches = [
        [
            "home" => "Olimpia Milano",
            "away" => "Cantù",
            "home_points" => 55,
            "away_points" => 60,
        ],
        [
            "home" => "Roma",
            "away" => "Cefalù",
            "home_points" => 30,
            "away_points" => 40,
        ],
        [
            "home" => "Torino",
            "away" => "Palù",
            "home_points" => 65,
            "away_points" => 75,
        ],
    ];
    for ($i = 0; $i < count($matches); $i++) {
        ?>

        <p>
        <?php echo $matches[$i]["home"]."-".$matches[$i]["away"]." | ".$matches[$i]["home_points"]."-".$matches[$i]["away_points"]; ?>
        </p>
        <?php } ?>
    

</body>

</html>