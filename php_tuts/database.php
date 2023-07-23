<?php

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "businessdb";


$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
} catch (mysqli_sql_exception) {
    echo "Failed to connect to the database" . "<br />";
}

if ($conn) {
    echo "Connected to the database successfully" . "<br />";
}

try {
    $user = "andy";
    $password = "123456";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $insert = "INSERT INTO users(user, password) VALUES('$user', '$hash')";
    mysqli_query($conn, $insert);
} catch (mysqli_sql_exception) {
    echo "Failed to insert data into the database" . "<br />";
}


try {
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    print_r($result);
    echo "<br />";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["user"] . " " . $row["password"] . "<br />";
        }
    }
} catch (mysqli_sql_exception) {
    echo "Failed to query data into the database";
}

mysqli_close($conn);
