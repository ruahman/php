<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>
<body>
    <!-- <form action="get_and_post.php" method="get"> -->
    <form action="get_and_post.php" method="post">
        <lable for="name">name:</lable><input type="text" name="name"><br>
        <label for="password">password</label><input type="password" name="password"><br>
        <input type="submit" value="submit">
    </form>   
</body>
</html>
<?php
    // echo $_GET["name"] . "<br>";
    // echo $_GET["password"] . "<br>";
    echo $_POST["name"] . "<br>";
    echo $_POST["password"] . "<br>";
?>