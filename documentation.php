<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{

        }
        table{
            margin-top: 30px;
        }
        table, tr, th, td{
            border: 1px solid;
            border-collapse: collapse;
            padding: 10px;
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
                        <a class="nav-link" href="9_pattren_print.php">Problem No. 9</a>
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


<h3 class="btn btn-block btn-success py-2 mt-4 font-weight-bold text-uppercase">Documentation</h3>
<div class="container">
    <div class="row">
        <div class="card bg-dark">
            <div class="card-body text-white">
                <h3 class="text-danger">***Its very impotent, so read carefully !!</h3>
                <ol type="1">
                    <li>First create a database in phpmyadmin with name "labfinal"</li>
                    <li>Import the database labfinal.sql from resource folder</li>
                    <li>Press The login Button</li>
                    <li>Write this email in the email field : jahid15-1499@diu.edu.bd</li>
                    <li>Write this password in the password field : 112233</li>
                    <li>Finally press the login Button</li>
                    <li>Hopefully enjoy this! Thank you</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<h3 class="btn btn-block btn-success py-2 mt-4 font-weight-bold text-uppercase">Contact With us</h3>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contact No.</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Write Your Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.700312013943!2d90.34508223190669!3d23.794582085659727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e96fce29dd%3A0x6ccd9e51aba9e64d!2sMirpur-1%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1608054352231!5m2!1sen!2sbd" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-white mt-3 bg-dark text-center">
    <div class="container py-3">
        <p class="pt-1">2020 &copy; All copyright reserve</p>
    </div>
</div>
</body>
</html>