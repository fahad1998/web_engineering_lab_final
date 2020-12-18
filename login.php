<?php
session_start();
$conn = new mysqli("localhost","root","","labfinal");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `user` WHERE email = '$email' && password = '$password'";

$result = $conn -> query($sql)-> fetch_row();



if ($result > 0) {
    $_SESSION['message'] = "Successfully login";
    $_SESSION['email'] = $email;
    header("Location: user_info.php");
}else{
    $_SESSION['message'] = "Wrong email or password <br>";
    header("Location: login_from.php");
}