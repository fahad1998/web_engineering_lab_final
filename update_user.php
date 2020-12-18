<?php

session_start();

if (!isset($_SESSION['email'])){
    header("Location: login_from.php");
}

$conn = new mysqli("localhost","root","","labfinal");

$name = $_POST["name"];
$std_id = $_POST["std_id"];
$age = $_POST["age"];
$user_name = $_POST["user_name"];
$password = $_POST["password"];
$id=$_GET['id'];


$sql = "UPDATE `user` SET `name` = '$name', `std_id` = '$std_id', `age` = '$age', `user_name` = '$user_name', `password` = '$password'  WHERE `id` = '$id'";



if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "User Updated Successfully";
    header("Location: user_info.php");
} else {
    $_SESSION['message'] = "Failed to user Update";
    header("Location: edit_user.php");
}

?>