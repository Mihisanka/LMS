<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
elseif  ($_SESSION['usertype']=='student'){
    header('location:login.php');
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lms-php";

$data = mysqli_connect($host, $user, $password, $dbname);

if (!isset($_SESSION["add_student"]))
 {
    $username = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype = "student";

    $sql="INSERT INTO user(username,email,phone,usertype,password)
    VALUES(' $username','$user_email','$user_phone','$usertype','$user_password')";

   $result = mysqli_query($data, $sql);    
   if($result){
    echo"data upload successfully ";
}
   else{
    echo"data upload successfully";
   }
}



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Student </title>


    <style type="text/css">
    label {

        display: inline-block;
        text-align: right;
        width: 100px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .dig {
        background-color: aquamarine;
        border-radius: 25px;
        padding-top: 70px;
        padding-bottom: 70px;
        width: 500px;
    }
    </style>

    <?php 
     include'admin_css.php';
     
    ?>

</head>

<body>


    <?php 

     include'admin_sidebar.php';
     
    ?>

    <aside>
        <div class="content">
            <h1> Add Student</h1>
            <center>
                <h1> Add Student</h1>

                <div class="dig">

                    <form action="#" method="POST">

                        <div>
                            <label class="">User Name</label>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <label class="">Email</label>
                            <input type="email" name="email">
                        </div>
                        <div>
                            <label class="">Phone</label>
                            <input type="number" name="phone">
                        </div>
                        <div>
                            <label class="">Password</label>
                            <input type="text" name="password">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
                        </div>


                    </form>
                </div>
            </center>
        </div>
    </aside>
</body>

</html>