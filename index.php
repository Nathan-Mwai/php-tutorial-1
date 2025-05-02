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

    function sayHello (string $name){
        return "Hello {$name}";
    };
    $test = sayHello(123) ;
    echo $test;
    ?>
</body>

</html>