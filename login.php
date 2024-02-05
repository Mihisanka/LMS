<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">

    <div class="back_btn">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<body>
    <center>
        <div class=" form_deg">
            <label class="title_log">Login form</label>
            <center class="error_m">

                <h4>
                    <?php

                        error_reporting(0);
                        session_start();
                        session_destroy();

                        echo $_SESSION['loginMessage'];

                    ?>
                </h4>
            </center>
            <form action=" login_check.php" method="POST" class="login_fo">

                <div>
                    <label class="label_text">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="label_text">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" name="login" value="Login">

                </div>


            </form>
            <center>

            </center>


        </div>
    </center>
</body>

</html>