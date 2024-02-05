<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:"); // You should specify a valid location here
} elseif ($_SESSION['usertype'] == 'student') {
    header('location:login.php');
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lms-php";

$data = mysqli_connect($host, $user, $password, $dbname);

// Check if 'student_id' is set in the URL
if (isset($_GET['student_id'])) {
    $id = $_GET['student_id'];
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($data, $sql);

    if ($result) {
        $info = $result->fetch_assoc();
    } else {
        die("Error retrieving user information: " . mysqli_error($data));
    }
} else {
    die("Student ID not provided in the URL.");
}

// Check if 'delete' is set in the URL
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_query = "DELETE FROM user WHERE id='$delete_id'";
    $delete_result = mysqli_query($data, $delete_query);

    if ($delete_result) {
        echo "Delete success";
        // Redirect to a specific page after successful deletion
        header("location: your_redirect_page.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($data);
    }
}

if (isset($_POST['update'])) {
    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_phone = $_POST['phone'];
    $_password = $_POST['password'];

    // Use $_name, $_email, $_phone, $_password instead of $name, $email, $phone, $password
    $query = "UPDATE user SET username='$_name', email='$_email', phone='$_phone', password='$_password' WHERE id=$id";

    $result2 = mysqli_query($data, $query);

    if ($result2) {
        echo "Update success";
    } else {
        echo "Error updating record: " . mysqli_error($data);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Student</title>
    <?php include 'admin_css.php'; ?>
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
    <?php include 'admin_sidebar.php'; ?>

    <div class="content">
        <center>
            <h1>Update Student</h1>
            <div class="div">
                <form action="#" method="POST">
                    <div>
                        <label class="">Username</label>
                        <input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
                    </div>
                    <div>
                        <label class="">Email</label>
                        <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
                    </div>
                    <div>
                        <label class="">Phone</label>
                        <input type="number" name="phone" value="<?php echo "{$info['phone']}"; ?>">
                    </div>
                    <div>
                        <label class="">Password</label>
                        <input type="text" name="password" value="<?php echo "{$info['password']}"; ?>">
                    </div>
                    <div>
                        <input class="btn btn-success" type="submit" name="update" value="Update">
                        <a href="?delete=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>

</html>