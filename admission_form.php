<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
elseif  ($_SESSION['usertype']=='student'){
    header('location:login.php');
}

/* db connection */

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lms-php";

$data = mysqli_connect($host, $user, $password, $dbname);
$sql="SELECT * From admission";
$result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admission form </title>

    <?php 
     include'admin_css.php';
    ?>
    <style type="text/css">
    .table_th {
        padding: 20px;
        font-size: 19px;
        padding-top: 10px;
    }

    .table_td {
        padding: 20px;
        font-size: 19px;
        padding-top: 10px;
        background-color: aquamarine;
    }
    </style>

</head>

<body>
    <?php 
     include'admin_sidebar.php';
    ?>

    <aside>
        <div class="content">
            <center>
                <h1> Admission Form </h1>
                <br><br>
                <table border="1px">
                    <tr>
                        <th class="table_th">Name</th>
                        <th class="table_th">Email</th>
                        <th class="table_th">Phone Number</th>
                        <th class="table_th">Message</th>
                    </tr>

                    <?php 
                while($info=$result->fetch_assoc()){
                ?>
                    <tr>
                        <td class="table_td"><?php  echo"{$info['name']}";?></td>
                        <td class="table_td"><?php  echo"{$info['email']}";?></td>
                        <td class="table_td"><?php  echo"{$info['phone']}";?></td>
                        <td class="table_td"><?php  echo"{$info['message']}";?></td>
                    </tr>
                    <?php 
                }
                ?>
                </table>
            </center>
        </div>
    </aside>
</body>