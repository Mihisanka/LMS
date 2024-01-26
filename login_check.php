<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "lms-php";

$data = mysqli_connect($host, $user, $password, $dbname);

if (!$data) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($data, $_POST['username']);
    $pass = mysqli_real_escape_string($data, $_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$name' AND password='$pass'";
    
    $result = mysqli_query($data, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            if (isset($row["usertype"]) && $row["usertype"] == "admin") {
                header("location: adminhome.php");
                exit();
            } elseif (isset($row["usertype"]) && $row["usertype"] == "student") {
                header("location: studenthome.php");
                exit();
            } else {
                echo "Username or password do not match";
            }
        } else {
            echo "No user found with the provided credentials";
        }
    } else {
        echo "Query error: " . mysqli_error($data);
    }
}

mysqli_close($data);
?>