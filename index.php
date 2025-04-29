<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // incrementing/decrementing operators
    // ++a increases by 1
    // --a decreases by 1
    // a++ We add one to the variable but it won't be seen on the view. The original will be seen i.e if a = 1 then a++ = 1. However when we call tha variable below the v++ the "v" will return the v + v making it 2v 
    $a = 2;
    // a-- We subtract one to the variable but it won't be seen on the view. The original will be seen i.e if a = 1 then a-- = 1. However when we call tha variable below the v-- the "v" will return the v - v making it 0v 
    $a = 2;
    echo $a--;
    echo $a;
    ?>
</body>
</html>