<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:");
}
elseif  ($_SESSION['usertype']=='student'){
    header('location:login.php');
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lms-php";

$data = mysqli_connect($host, $user, $password, $dbname);
$id=$_GET['student_id'];
$sql="SELECT * From user WHERE id='$id'";
$result = mysqli_query($data, $sql);
$info=$result->fetch_assoc();

if(isset($_POST['update']));{
    $_name=$POST['name'];
    $_email=$POST['email'];
    $_phone=$POST['phone'];
    $_password=$POST['password'];

    $query="UPDATE user SET username='$name', email='$email',phone='$phone',password='$password' WHERE id=$id'";
    
    $result2 = mysqli_query($data, $query);

    if($result2){
        echo "update success";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>update student</title>
    <?php 
     include'admin_css.php';
    ?>
    <style type="text/css">
    label {
        display: inline-block;
        width: 100px;
        text-align: right;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .div {
        background-color: aquamarine;
        border-radius: 25px;
        padding-top: 70px;
        padding-bottom: 70px;
        width: 500px;
    }
    </style>
</head>

<body>
    <?php 
     include'admin_sidebar.php';
    ?>


    <div class="content">
        <center>
            <h1> update student </h1>
            <div class="div">
                <form action="#" method="" POST>
                    <div>
                        <label class="">Username</label>
                        <input type="text" name="name " value="<?php echo "{$info['username']}";?>">
                    </div>
                    <div>
                        <label class="">Email</label>
                        <input type="email" name="email" value="<?php echo "{$info['email']}";?>">
                    </div>
                    <div>
                        <label class="">Phone</label>
                        <input type="number" name="phone" value="<?php echo "{$info['phone']}";?>">
                    </div>
                    <div>
                        <label class="">Password</label>
                        <input type="text" name="password" value="<?php echo "{$info['password']}";?>">
                    </div>
                    <div>
                        <input class="btn btn-success" type="submit" name="update" value="Update">
                    </div>
                </form>
            </div>
        </center>

</body>

</html>