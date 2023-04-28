<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Dashboard</title>
</head>

<body>


    <div class="container">

        <div class="logout">

            <h2>Hello <?php echo $_SESSION['uname']; ?>,</h2>

            <a href="logout.php"> <button class="btn btn-info" name="logout"> Logout</button></a>
        </div>

        <!-- <h1><a href="bmi.php">Logout</a> <br></h1> -->

        <div class="row justify-content-center">
            <a href="tracker.php">Tracker</a>
            <a href="report.php">Report</a>
            <a href="bmi.php">BMI Calculator</a> <br>


        </div>
    </div>

</body>

</html>