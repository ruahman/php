<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

if(isset($_SESSION["favcolor"])){
    echo $_SESSION["favcolor"] . "<br/>";
}

if(isset($_SESSION["favanimal"])){
    echo $_SESSION["favanimal"] . "<br/>";
}


// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>