<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Form data</title>
    </head>
    <body>
        <form method="get">
            <input type="text" name="name" placeholder="Name"/><br />
            <input type="text" name="age" placeholder="Age"/><br />
            <input type="radio" name="gender" value="male" id="male" />
            <label for="male">Male</label><br />
            <input type="radio" name="gender" value="female" id="female" />
            <label for="female">Female</label><br />
            <input type="submit" />
        </form>
<?php
    if(isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["gender"])){
        echo "<p>My name is ".$_GET["name"].". I am ".$_GET["age"]." years old. I am ".$_GET["gender"]."</p>";
    }
?>
    </body>
</html>