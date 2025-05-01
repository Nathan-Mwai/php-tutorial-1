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
    $fruits = ["Apple", "Banana", "Pineapple"];

    $fruits[] = "Orange";

    echo $fruits[3];
    // This one replaces the banana to avocado
    $fruits[1] = "Avocado";
    echo $fruits[1];

    //Delete a fruit without reseting the count i.e 1 remains empty and throws an error
    // unset($fruits[1]);
    // echo $fruits[1];

    // Delete a fruit and reconfigure the count
    array_splice($fruits,0,1); // Takes out banana
    echo $fruits[1];
    ?>
</body>

</html>