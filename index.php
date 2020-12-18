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
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                        <a class="nav-link" aria-current="page" href="documentation.php">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_from.php">Log In</a>
                    </li>
                <?php }?>

            </ul>
        </div>
    </div>
</nav>

<h3 class="btn btn-block btn-success mt-3 py-2 font-weight-bold text-uppercase">About Us</h3>
<div class="card container">
    <div class="card-body">
        <p class="lead">
            A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students (or "pupils") under the direction of teachers.
            Most countries have systems of formal education, which is sometimes compulsory.[2] In these systems, students progress through a series of schools. The names for these schools
            vary by country (discussed in the Regional section below) but generally include primary school for young children and secondary school for teenagers who have completed primary
            education. An institution where higher education is taught, is commonly called a university college or university.

            <br>
            <br>

            In addition to these core schools, students in a given country
            may also attend schools before and after primary (Elementary in the US) and secondary (Middle school in the US) education. Kindergarten or preschool provide some schooling to
            very young children (typically ages 3–5). University, vocational school, college or seminary may be available after secondary school. A school may be dedicated to one particular
            field, such as a school of economics or a school of dance. Alternative schools may provide nontraditional curriculum and methods.
        </p>
    </div>
</div>

<h3 class="btn btn-block btn-success py-2 mt-4 font-weight-bold text-uppercase">Our Team Info</h3>
<div class="container text-success">
    <div class="row">
        <div class="col-md-4 mt-1">
            <div class="card" style="width: 18rem;">
                <img src="team/5.jpg" style="height: 290px;" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Jahid Hassan</h5><span>Team leader</span>
                    <h6>171-15-1499</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-1">
            <div class="card" style="width: 18rem;">
                <img src="team/4.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Md. yeasin arafat</h5>
                    <h6>171-15-1203</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-1">
            <div class="card" style="width: 18rem;">
                <img src="team/3.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Quasha akter</h5>
                    <h6>173-15-1657</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="team/2.jpg" style="height: 290px;" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Kanak Chandra</h5>
                    <h6>173-15-1663</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="team/1.jpg"  style="height: 290px;" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title">Fahad Amin</h5>
                    <h6>172-15-9739</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="team/6.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Hasinur Rahman</h5>
                    <h6>173-15-1703</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 class="btn btn-block btn-success py-2 mt-4 font-weight-bold text-uppercase">Teacher Info</h3>
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-1">
            <div class="card" style="width: 18rem;">
                <img src="img/1.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title">Mr. David</h5>
                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-1">
            <div class="card" style="width: 18rem;">
                <img src="img/2.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title">Maria</h5>
                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-1">
            <div class="card" style="width: 18rem;">
                <img src="img/3.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title">Mrs. Patricia Donna</h5>
                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="img/4.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title">Lisa Susan</h5>
                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="img/5.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title">Robert Michael</h5>
                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="img/6.jpg" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <h5 class="card-title">Mr. John Doe</h5>
                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<h3 class="btn btn-block btn-success py-2 mt-4 font-weight-bold text-uppercase">Notice Board</h3>
<div class="container">
    <div class="row">
        <ol type="1">
            <li><a href="#"> Final Exam Routine Fall 2020 (Revised on 12-12-2020)</a></li>
            <li><a href="#">The Updated Routine for Final Examination</a></li>
            <li><a href="#">The Updated Routine for Final Examination</a></li>
            <li><a href="#">BSS (Hons) and MSS Final Exam routine. Fall 2020</a></li>
            <li><a href="#">Teaching Evaluation Form for Fall 2020 semester</a></li>
            <li><a href="#">Updated Final Exam Routine of Fall-2020 (EEE,Ashulia Campus, Day & Evening)</a></li>
            <li><a href="#">Fees Payment Schedule of Fall'2020 Final Examination</a></li>
            <li><a href="#">Updated Final Exam Routine Fall-2020 (Day & Eve_City Campus)</a></li>
            <li><a href="#">Final Exam Routine (Fall 2020)</a></li>
        </ol>
    </div>
</div>

<h3 class="btn btn-block btn-success py-2 mt-4 font-weight-bold text-uppercase">Gallery</h3>
<div class="container">
    <div class="row my-3">
        <div class="com-md-3">
            <img src="gallery/1.jpg" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="com-md-3">
            <img src="gallery/2.jpg" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="com-md-3">
            <img src="gallery/3.jpg" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="com-md-3">
            <img src="gallery/4.jpg" class="img-fluid img-thumbnail" alt="">
        </div>

        <div class="com-md-3">
            <img src="gallery/5.jpg" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="com-md-3">
            <img src="gallery/6.jpg" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="com-md-3">
            <img src="gallery/7.jpg" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="com-md-3">
            <img src="gallery/8.jpg" class="img-fluid img-thumbnail" alt="">
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
                            <input type="text" class="form-control" id="exampleInputPassword1">
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