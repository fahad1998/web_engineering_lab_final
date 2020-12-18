<?php

session_start();

$conn = new mysqli("localhost","root","","labfinal");

$name = $_POST["name"];
$std_id = $_POST["std_id"];
$age = $_POST["age"];
$user_name = $_POST["user_name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO `user`(name, std_id, age, user_name, email, password) VALUES ('$name', '$std_id', '$age', '$user_name', '$email', '$password')";


if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "User Successfully add";
    header("Location: 1_insert_display_data.php");
} else {
    $_SESSION['message'] = "Failed to Product add";
    header("Location: 1_insert_display_data.php");
}