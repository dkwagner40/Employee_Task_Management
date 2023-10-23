<?php
$servername = "localhost";
$username = "task_managment_system";
$password = "";
$dbname = "task_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
