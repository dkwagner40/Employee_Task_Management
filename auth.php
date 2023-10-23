<?php
session_start();

function check_login() {
    if (empty($_SESSION['user_id'])) {
        header("Location: /Documents/Projects/Employee_Task_Management/login.php");
        exit;
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: /Documents/Projects/Employee_Task_Management/login.php");
    exit;
}
?>
