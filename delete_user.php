<?php

session_start();

if (!isset($_SESSION['email'])){
    header("Location: login_from.php");
}

$conn = new mysqli("localhost","root","","labfinal");
$id = $_GET['id'];

$sql = "DELETE FROM `user` WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "User deleted Successfully";
    header("Location: user_info.php");
} else {
    $_SESSION['message'] = "Failed to user delete";
    header("Location: user_info.php");
}