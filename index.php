<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <?php
    // While loop
    // $test = 10;
    // while ($test < 10) {
    //     echo $test;
    //     $test++;
    // }

    // Do while loop
    // do{
    //     echo $test;
    //     $test++;
    // } while($test < 10);

    // foreach loop
    // $fruits = ['apple', 'banana', 'orange'];
    // foreach($fruits as $fruit){
    //     echo "This is a $fruit" . "<br>";
    // }

    $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");
    foreach ($fruits as $fruit => $color) {
        echo "This is a $fruit that has a color of $color" . "<br>";
    }

    ?>
</body>

</html>