<?php
$host = "localhost";
$user = "root"; // default user
$password = ""; // default password
$db = "login_system";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
