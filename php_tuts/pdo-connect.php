<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = 3306;
$db = "businessdb";

try {
    // $conn = new PDO("mysql:host=$servername;", $username, $password);
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$db;charset=utf8mb4", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $statement = $conn->prepare("SELECT * FROM users");
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    var_dump($users);
    echo "</pre>";
    die();

    $conn = null; // close connection
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
