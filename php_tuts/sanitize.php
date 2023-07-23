<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize</title>
</head>

<body>
    <form action="sanitize.php" method="post">
        <label for="username">username:</label><input type="text" name="username" /> <br />
        <input type="submit" name="login" />
    </form>
</body>

</html>

</html>

<?php
if (isset($_POST['login'])) {
    // make sure that we escape for embeded javascript
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $username . "<br />";
}
?>