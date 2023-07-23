<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check box</title>
</head>

<body>
    <form action="check-box.php" method="post">
        <input type="checkbox" name="food[]" value="Pizza" /> Pizza <br />
        <input type="checkbox" name="food[]" value="taco" /> Taco <br />
        <input type="checkbox" name="food[]" value="hamburger" /> Hamburger <br />
        <input type="checkbox" name="food[]" value="hotdog" /> Hotdog <br />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

</html>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['food'])) {
        $food = $_POST['food'];
        echo var_dump($food) . "<br />";
    }
    // if (isset($_POST['pizza'])) {
    //     echo "You have chosen pizza <br />";
    // }
    // if (isset($_POST['taco'])) {
    //     echo "You have chosen taco <br />";
    // }
    // if (isset($_POST['hamburger'])) {
    //     echo "You have chosen hamburger <br />";
    // }
    // if (isset($_POST['hotdog'])) {
    //     echo "You have chosen hotdog <br />";
    // }
    // if (empty($_POST['pizza'])) {
    //     echo "You have not chosen pizza <br />";
    // }
    // if (empty($_POST['taco'])) {
    //     echo "You have not chosen taco <br />";
    // }
    // if (empty($_POST['hamburger'])) {
    //     echo "You have not chosen hamburger <br />";
    // }
    // if (empty($_POST['hotdog'])) {
    //     echo "You have not chosen hotdog <br />";
    // }
}
?>