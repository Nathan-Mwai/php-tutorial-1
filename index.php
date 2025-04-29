<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="form/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <!-- The required is ot a guaranteeon security against submitting empty inputs. To prevent this I use server side security -->
            <input required type="text" name="firstname" id="firstname" placeholder="Enter Your First Name"/>

            <label for="lastname">Lastname?</label>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your last name"/>

            <label for="favouritepet"> Favourite pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <!-- name="submit" was used with isset -->
             <button type="submit">Submit</button>

        </form>
    </main>
</body>
</html>