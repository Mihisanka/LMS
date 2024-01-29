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
            <h1> Admin slide bar content </h1>
            <p>Schools can be public or private, and their structures
                <br>can vary based on educational philosophies and regional policies
                Schools can be public or private, and their structures
                <br>can vary based on educational philosophies and regional policies
            </p>
        </div>
    </aside>
</body>

</html>