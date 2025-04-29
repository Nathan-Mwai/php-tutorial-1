<?php
// THis is ine of the ways to access the method used however it is ill advised.
// if(isset($_POST["submit"])){}
// This is another way

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //htmlspecialchars prevents injection of malicious codes
    //htmlentities() t
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    //PHP example of server side security
    if(empty($firstname)){
        exit();
        header("Location: ../index.php");
    
    }
    // echo "These are the data that the user submitted ";
    // echo "<br>";
    // echo $firstname;
    // echo "<br>";
    // echo $lastname;
    // echo "<br>";
    // echo $favouritepet;

    // header("Location: ../index.php");
}else{
    // header("Location: ../index.php");

}