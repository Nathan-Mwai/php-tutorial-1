<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // switch and if statements are similar to js
    $a= "1";
    $b=4;

    $result = match ($a) {
        // 1,2,3,4,5,6,7, this is how we use "or" using a comma
        // it is strict on data types comparison
        1 => "Variable a is equal to 1",
        2 => "Variable a is equal to 2",
        //default / else
        default => "None were a match",
    };

    echo $result
    ?>
</body>
</html>