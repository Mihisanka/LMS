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
     include'admin_css.php';
    ?>
</head>

<body>

    <header class="header">
        <a href="index.php">Student Dashboard</a>

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
            <h1> student Home </h1>

            </p>
        </div>
    </aside>
</body>

</html>