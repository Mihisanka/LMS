<?php
error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    
    $message=$_SESSION['message'];
    echo "<script type ='text/javascript'>
    alert('$message');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student Management System </title>
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav>
        <label class="logo">W-School</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <img class="main_img" src="main-bg.jpg">
        <label class="main_text"> we learn at this collage</label>
    </div>

    <center>
        <h1 class="start">Welcome to W-school </h1>
    </center>

    <div class="container">
        <div class="row">

            <div class="col-md-4">

                <img class="welcome_img" src="school2.jpg">

                <div class="col-md-8">

                </div>

            </div>

        </div>

    </div>

    <center>
        <h1 class="start">Teachers</h1>
    </center>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="teacher1.jpg">
                <p>Schools can be public or private, and their structures
                    <br>can vary based on educational philosophies and regional policies
                </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="teacher2.jpg">
                <p>Schools can be public or private, and their structures
                    <br>can vary based on educational philosophies and regional policies
                </p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="teacher3.jpg">
                <p>Schools can be public or private, and their structures
                    <br>can vary based on educational philosophies and regional policies
                </p>
            </div>

        </div>
    </div>

    <center>
        <h1 class="start">Courses </h1>
    </center>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <img class="Courses" src="school.jpg">
                <h3>Teaching </h3>

            </div>
            <div class="col-md-4">
                <img class="Courses" src="marketing.png">
                <h3>Marketing </h3>
            </div>

            <div class="col-md-4">
                <img class="Courses" src="web.jpg">
                <h3>Web Development</h3>
            </div>

        </div>
    </div>

    <center>
        <h1 class="start">Admission</h1>
    </center>

    <center>
        <div align="center" class="admission_from">
            <form action="data_check.php" method="POST">
                <div class="adm_int">
                    <label class="label_text">Name</label>
                    <input class="input_deg" type="text" name="name">
                </div>
                <div>
                    <label class="label_text">Email</label>
                    <input class="input_deg" type="text" name="email">
                </div>
                <div>
                    <label class="label_text">Phone</label>
                    <input class="input_deg" type="text" name="phone">
                </div>
                <div>
                    <label class="label_text">Message</label>
                    <textarea class="input_text" name="message"></textarea>
                </div>
                <div class="adm_int">
                    <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
                </div>
            </form>
        </div>
    </center>

    <footer>

        <h4 class="f_text">all @copyright reservers by MihisankaSandudeeptha 2024</h4>
    </footer>

</body>

</html>