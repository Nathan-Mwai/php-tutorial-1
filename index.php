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
    
    $string = "Hello World!";
    // strlen checks length
    echo strlen($string);
    // checks position of specific character
    echo strpos($string, "Wo");
    //replacing a string
    echo str_replace("World", "Nathan", $string);

    //Converts to lowercase
    echo strtolower($string);
    //uppercase
    echo strtoupper($string);

    //substring
    echo substr($string,0,-4);

    // taking apart this one divides
    print_r(explode(" ",$string ))
    ?>
</body>

</html>