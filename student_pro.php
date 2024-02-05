<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
elseif  ($_SESSION['usertype']=='admin'){
    header('location:login.php');
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lms-php";

$data = mysqli_connect($host, $user, $password, $dbname);

$name=$_SESSION["username"];
$sql="SELECT * From user WHERE username='$name'";
$result = mysqli_query($data, $sql);
$info=mysqli_fetch_assoc($result);

if(isset($_POST['update_profile'])){
    $_email=$_POST['email'];
    $_phone=$_POST['phone'];
    $_password=$_POST['password'];
    
    $sql2="UPDATE user SET email='$s_email',phone='$s_phone',password='$s_password' WHERE username='$name'";

    $result2=mysqli_query($data,$sql2);

    if($result2){
        echo"update success";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <?php 
     include'student_css.php';
    ?>

    <style type="text/css">
    label {
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .div_deg {
        background-color: skyblue;
        width: 500px;
        padding-top: 70px;
        padding-bottom: 70px;
        border-radius: 25px;
    }
    </style>
</head>

<body>
    <?php
    include'student_sidebar.php';
    ?>

    <div class="content">

        <center>
            <h1>Update Profile</h1>
        </center>
        <br><br><br>
        <center>

            <form action="#" method="POST">
                <div class="div_deg">


                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value=" <?php 
                        echo"{$info['email']}"?>">
                    </div>

                    <div>
                        <label>Phone</label>
                        <input type="number" name="phone" value=" <?php 
                        echo"{$info['phone']}"?>">
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="text" name="password" value=" <?php 
                        echo"{$info['password']}"?>">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" value="submit" name=" Submit">
                    </div>
                </div>
            </form>
        </center>
    </div>

</body>

</html>