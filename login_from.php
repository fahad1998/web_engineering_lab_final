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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="login-page">
    <div class="form">
        <div style="color: red">
            <?php
            if (isset($_SESSION['message'])){
                echo $_SESSION['message'];
            }
            ?>
        </div>
        <form class="login-form" action="login.php" method="post">
            <input type="text" name="email" placeholder="Email" autocomplete="off"/>
            <input name="password" type="password" autocomplete="off" placeholder="Password"/>
            <button type="submit">login</button>
        </form>
        <div>Or</div>
        <div>
            <button><a href="index.php">Home</a></button>
        </div>
        <?php
        if (isset($_SESSION['message'])){
            unset($_SESSION['message']);
        }
        ?>

    </div>
</div>

</body>
</html>
<?php
if (isset($_SESSION['message'])){
    unset($_SESSION['message']);
}
?>