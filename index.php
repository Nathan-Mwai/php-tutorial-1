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

    $array = ["apple","banana", "orange"];
    // checks how many values are in array
    echo count($array);
    // checks if it is an array
    echo is_array($array);
    // push data into array
    array_push($array,"Mangoes");
    print_r($array);

    //remove a value in the array
    array_pop($array);
    print_r($array);

    // reverse array
    print_r(array_reverse($array));

    $array1 = ["apple","banana", "orange"];
    $array2 = ["tree","branch", "color"];

    //merge
    print_r(array_merge($array1, $array2));
   


    ?>
</body>

</html>