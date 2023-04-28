<?php

if (isset($_POST['submit'])) {

    error_reporting(0);

    include "connection.php";

    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM credentials WHERE username = '{$uname}' AND pwd = '{$pwd}'";

    $result = mysqli_query($conn, $sql) or die("Query unsuccesfull");

    // $row = mysqli_fetch_array($result);

    echo "<pre>";
    print_r($result);
    echo "</pre>";

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            if ($row['username'] == $uname) {
                if ($row['pwd'] == $pwd) {

                    session_start();

                    $_SESSION['uname'] = $row['username'];
                    $_SESSION['pwd'] = $row['pwd'];

                    echo $_SESSION['uname'];
                    echo $_SESSION['pwd'];

                    // header("Location: http://localhost/MealTracker/dashboard.php");
                } else {
                    // $_SESSION['msg'] = "Invalid Password";
                    echo $_SESSION['uname'];
                    echo $_SESSION['pwd'];
                    echo "invalid password";
                }
            } else {

                $_SESSION['msg'] = "Invalid username";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login Page</title>
</head>

<body>


    <div class="container-fluid">
        <div class="container">
            <div class="row d-flex">
                <div class="col-sm ">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- 
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul> -->

                        <div class="carousel-inner">
                            <div class="carousel-item" data-interval="4000">
                                <img src="images/img1.png" class="img-fluid" alt="#">
                            </div>
                            <div class="carousel-item active" data-interval="4000">
                                <img src="images/img2.png" class="img-fluid" alt="#">
                            </div>
                            <div class="carousel-item" data-interval="4000">
                                <img src="images/joyful-female-doctor.png" class="img-fluid" alt="#">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a> -->
                    </div>
                </div>

                <div class="col-sm col-two">
                    <div class="login ">

                        <h1>MealTracker</h1>
                        <h6>The heart of your healthcare</h6>

                        <h5>Welcome to MealTracker</h5>

                        <p class="bg-info"> <?php echo $_SESSION['msg'] ?></p>

                        <?php
                        // session_unset();
                        // session_destroy();
                        ?>


                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username or email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                            <div class="submit_button">
                                <input type="submit" name="submit" value="LOGIN">
                            </div>
                        </form>
                        <p class="para">Don't have an account? <a href="signup.php">Sign Up</a> </p>
                        <p class="para">Forgot Your Password ? Don't worry <a href="recover.php">Click Here</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <body>

</html>