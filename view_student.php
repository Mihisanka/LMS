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
$sql="SELECT * From user WHERE usertype='student'";
$result = mysqli_query($data, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>


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
    </>
</head>

<body>
    <?php 
    
    include'admin_sidebar.php';
    
    ?><aside>
        <div class="content">
            <center>
                <h1>View Student </h1>
                <br><br>
                <table border="1px">
                    <tr>
                        <th class="table_th">UserName</th>
                        <th class="table_th">Email</th>
                        <th class="table_th">Phone</th>
                        <th class="table_th">Password</th>
                    </tr>
                    <?php 
                while($info=$result->fetch_assoc()){
                ?>
                    <tr>
                        <td class="table_td"><?php  echo"{$info['username']}";?></td>
                        <td class="table_td"><?php  echo"{$info['email']}";?></td>
                        <td class="table_td"><?php  echo"{$info['phone']}";?></td>
                        <td class="table_td"><?php  echo"{$info['password']}";?></td>

                    </tr>
                    <?php 
                }
                ?>
                </table>
            </center>
        </div>
    </aside>
</body>

</html>