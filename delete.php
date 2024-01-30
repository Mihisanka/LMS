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
    <meta charset="utf-8">
    <title>Admin Dashboard</title>


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
            <h1>Delete</h1>
        </div>
    </aside>
</body>

</html>