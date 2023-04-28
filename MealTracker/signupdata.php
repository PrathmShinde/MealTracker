<?php

include 'connection.php';

$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username =  mysqli_real_escape_string($conn, $_POST['username']);
    $email =     mysqli_real_escape_string($conn, $_POST['email']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);


    // Database Connection

    // Write the query
    $sql = "SELECT * FROM credentials WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $user = 1;      //if control goes here, it shows user already exits..

            echo "user already exits";
        } else {

            if ($password === $cpassword) {

                $sql = "INSERT INTO credentials(username,email_id,pwd)VALUES('$username','$email','$password')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $success = 1;
                    header("Location: http://localhost/MealTracker/index.php");
                }
            } else {


                $invalid  = 1;
                echo "password didn't match";
                die(mysqli_error($conn));
            }
        }
    }
}
