<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="formhandler.php">
            <label for="firstname">Firstname?</label>
            <input type="text" name="firstname" id="firstname" placeholder="Enter Your First Name"/>

            <label for="lastname">Lastname?</label>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your last name"/>

            <label for="favouritepet"> Favourite pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>