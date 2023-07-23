<?php

setcookie("favoriteFood", "Pizza", time() + 86400, "/");
setcookie("favoriteColor", "Blue", time() + 86400, "/");
setcookie("favoriteNumber", "7", time() + 86400, "/");

foreach ($_COOKIE as $key => $value) {
    echo $key . " " . $value . "<br />";
}
