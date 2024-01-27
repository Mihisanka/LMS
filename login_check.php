<?php
error_reporting(0);
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "lms-php";

$data = mysqli_connect($host, $user, $password, $dbname);

if (!$data) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =  $_POST['username'];
    $pass =  $_POST['password'];

    $sql = "select * from user where username='$name' AND password='$pass'";
    
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_assoc($result);

        
            if ($row["usertype"]== "student") {
                $_SESSION['username']=$name;
                header("location: studenthome.php");
               
            } elseif ($row["usertype"] == "admin") {
                $_SESSION['username']=$name;
                header("location: adminhome.php");
                
            } else {
                
                $message= "Username or password do not match";
                    $_SESSION['loginMessage']=$message;
                    header('location:login.php');
            }
        }
   
?>