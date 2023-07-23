<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start session_start</title>
</head>

<body>
    <h1>Start session_start</h1>
</body>

</html>
<?php
$_SESSION["username"] = "johndoe";
$_SESSION["password"] = "123456";

echo var_dump($_SESSION)
?>