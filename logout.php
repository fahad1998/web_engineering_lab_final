<?php

session_start();
session_destroy();
$_SESSION['message'] = "Successfully logout";

header("Location: index.php");

?>

<?php
