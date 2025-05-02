<?php
declare(strict_types= 1);
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

    $name = "Nathan";
    function calculator (int $num1, int $num2 ){

        global $name; // This is how I access global variable in a block scope
        $result = $num1 + $num2;
        return $name;
    };
    $test = calculator(2,5) ;
    echo $test;
    ?>
</body>

</html>