
<?php
session_start();

if (!isset($_SESSION['email'])){
    header("Location: login_from.php");
}



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
                        <a class="nav-link active" href="add_user_form.php">Add User</a>
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

<div class="container p-5">
    <div class="row">
        <div class="col-md-6 justify-content-center">
            <div class="card">
                <div class="card-body">
                    <div style="color: red">
                        <?php
                        if (isset($_SESSION['message'])){
                            echo $_SESSION['message'];
                        }
                        ?>
                    </div>
                    <form action="add_user_two.php" method="post">
                        <div class="text-center">
                            <h3 class="text-uppercase text-dark">User Registration Form</h3>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name"/>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Id</label>
                            <input type="text" class="form-control" name="std_id" placeholder="Student Id"/>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Age</label>
                            <input type="text" class="form-control" name="age" placeholder="Enter your age"/>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="text" class="form-control" name="user_name" placeholder="Enter your user name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password"/>
                        </div>

                        <button class="btn btn-block btn-success" type="submit">Add New User</button>
                    </form>
                    <br>
                    <div class="button">
                        <a class="btn btn-block btn-success" href="user_info.php">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
if (isset($_SESSION['message'])){
    unset($_SESSION['message']);
}
?>



