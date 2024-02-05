<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lms-php";

$data = mysqli_connect($host, $user, $password, $dbname);
if($_GET['student_id']){
    $user_id=$_GET['student_id'];
    $sql="DELETE FROM user WHERE id= '$user_id'";
    $result=mysqli_query($data,$sql);
    
    if(!$result) {
        $_SESSION['message']='Delete message is successful';
        header("location:view_student.php");
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <?php 
     include'admin_css.php';
    ?>
</head>

<body>

    <header class="header">
        <a href="view_student.php">Back</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <aside>

        <ul>
            <li>
                <a href="">My Account </a>
            </li>
            <li>
                <a href="">My Courses </a>
            </li>

        </ul>

    </aside>


    <aside>
        <div class="content">
            <h1> Delete successfully</h1>

            </p>
        </div>
    </aside>
</body>