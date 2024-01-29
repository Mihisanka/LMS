<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
elseif  ($_SESSION['usertype']=='student'){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Student </title>

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
        </div>
    </aside>
</body>

</html>