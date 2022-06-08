<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 3</title>
</head>

<body>
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papegni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papigni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papogni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papugni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Pepagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
    <?php for ($i = 0; $i < count(array_keys($posts)); $i++) {
        $current_key = array_keys($posts)[$i];
        ?>
        <h2>
        <?php echo $current_key; ?>
        </h2>
        <?php 
        for ($j = 0; $j < count($posts[$current_key]); $j++) {
        ?>
        <h3>
            <?php echo $posts[$current_key][$j]["title"]." - di ".$posts[$current_key][$j]["author"]; ?>
        </h3>
        <p>
            <?php echo $posts[$current_key][$j]["text"]; ?>
        </p>
        <?php } ?>

    <?php } ?>

</body>
</html>