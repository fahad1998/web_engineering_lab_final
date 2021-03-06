<?php
session_start();

if (!isset($_SESSION['email'])){
    header("Location: login_from.php");
}

$conn = new mysqli("localhost","root","","labfinal");

$sql = "SELECT * FROM `user`";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body{
            background: #8cc16e;
        }
        table{
            margin-top: 30px;
        }
        table, tr, th, td{
            border: 1px solid;
            border-collapse: collapse;
            padding: 10px;
        }

        .btn{
            padding: 10px 20px;
            background: green;
            color: whitesmoke;
            text-decoration: none;
        }
        .btn:hover{
            background: green;
        }

        .btn2{
            padding: 10px 20px;
            background: red;
            color: whitesmoke;
            text-decoration: none;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            margin-bottom: 25px;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Group 4</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <?php
                if (isset($_SESSION['email'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="user_info.php">User Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_user_form.php">Add User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="1_insert_display_data.php">Problem No. 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="7_random_numbers.php">Problem No. 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="8_print_second_red.php">Problem No. 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="9_pattren_print.php">Problem No. 9</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="10_display_color.php">Problem No. 10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="documentation.php">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_from.php">Log In</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-dark font-weight-bold p-5">
    <h3>Create a script to construct the following pattern, using nested for loop</h3>
    <br>
    <br>
    <?php

    //take number
    $number = 5;

    //outer loop
    for ($i = 0; $i < $number; $i++)
    {
        //inner loop
        for($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }
        echo "<br/>";
    }

    ?>
</div>
</body>
</html>

<?php
if (isset($_SESSION['message'])){
    unset($_SESSION['message']);
}
?>

