<?php

require_once __DIR__ .'/classes/movie.php';

$inception = new Movie(
    'Inception',
    'Azione', 
    'Un ladro tormentato che estrae segreti dai sogni delle persone...',
    150,
    'Christopher Nolan'
);

$limitless = new Movie(
    'Limitless',
    'Thriller', 
    'In piena crisi creativa, uno scrittore comincia a prendere una pillola magica...',
    105,
    'Neil Burger'
);

// var_dump($inception);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    
    <h1>
        PHP OOP 1
    </h1>

    <div class="inception">
        <?php
            $inception->printMovie()
        ?>
    </div>

    <div class="limitless">
        <?php
            $limitless->printMovie()
        ?>
    </div>

</body>
</html>