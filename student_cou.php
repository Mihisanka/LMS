<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
elseif  ($_SESSION['usertype']=='admin'){
    header('location:login.php');
}


?>

<!DOCTYPE html>
<html>

<head>
    <?php 
     include'student_css.php';
    ?>
</head>

<body>
    <?php
    include'student_sidebar.php';
    ?>

    <aside>
        <div class="content">
            <h1>My Courses </h1>
            </p>
        </div>
    </aside>

</body>

</html>