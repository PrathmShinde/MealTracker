<?php


session_start();

include 'connection.php';

error_reporting(1);

$success = 0;
$user = 0;
$invalid = 0;


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);


    // Write the query
    $sql = "SELECT * FROM credentials WHERE username = '$username'";

    $result = mysqli_query($conn, $sql) or die("Query failed");

    $num = mysqli_num_rows($result);

    if ($num > 0) {

        $_SESSION['msg'] = "User already exits";
    } else {

        if ($password === $cpassword) {
            $sql = "INSERT INTO credentials(username,email_id,pwd)VALUES('$username','$email','$password')";
            $result = mysqli_query($conn, $sql);

            header("Location: http://localhost/MealTracker/index.php");
        } else {

            $_SESSION['msg'] = "Password didn't match";
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
    <title>Signup Page</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>


    <div class="container-fluid">
        <div class="container">

            <!-- <form class="signup" action="signupdata.php" method="POST"> -->
            <form class="signup" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <h1>Create account</h1>
                <h3>Already have an account? <span> <a href="index.php"> Sign in</a></span></h3>

                <div class="signup__field">
                    <input class="signup__input" type="text" name="username" id="username" required />
                    <label class="signup__label" for="username">Username</label>
                </div>

                <div class="signup__field">
                    <input class="signup__input" type="text" name="email" id="email" required />
                    <label class="signup__label" for="email">Email</label>
                </div>

                <div class="signup__field">
                    <input class="signup__input" type="password" name="password" id="password" required />
                    <label class="signup__label" for="password">Password</label>
                </div>
                <div class="signup__field">
                    <input class="signup__input" type="password" name="cpassword" id="cpassword" required />
                    <label class="signup__label" for="password">Confirm Password</label>
                </div>

                <p class="bg-info"> <?php echo $_SESSION['msg'] ?></p>

                <button type="submit" name="submit">Sign up</button>

                <!-- onclick="validation()" -->

            </form>

            <!-- <script>
            function validation() {
            let pass = document.getElementById('password').value;
            let cpass = document.getElementById('cpassword').value;

            if (pass != cpass) {
            alert("password didnt match");


            return false;
            }
            }

            </script>  -->
        </div>

    </div>

</body>

</html>