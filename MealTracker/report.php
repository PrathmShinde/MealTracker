<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="report.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://kit.fontawesome.com/fcc22f116e.js" crossorigin="anonymous"></script>
    <title>report page</title>
</head>

<body>

    <div class="container">
        <table class="table">

            <?php

            // session_start();

            $user = $_SESSION['uname'];

            // Database Connection
            include 'connection.php';

            //MYSQL Query

            $sql = "SELECT * FROM record WHERE user = '$user'";

            $result = mysqli_query($conn, $sql) or die("Query unsuccessfull");

            if (mysqli_num_rows($result) > 0) {

            ?>
                <thead class="bg-warning">
                    <tr>
                        <th>Sr No</th>
                        <th>Date</th>
                        <th>Meal 1</th>
                        <th>Meal 2</th>
                        <th>Meal 3</th>
                        <th>Meal 4</th>
                        <th>Meal 5</th>
                        <th>Workout</th>
                        <th>Water</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                            <td> <?php echo $row['m_id'] ?></td>
                            <td> <?php echo $row['date'] ?></td>
                            <td> <?php echo $row['meal_1'] ?></td>
                            <td> <?php echo $row['meal_2'] ?></td>
                            <td> <?php echo $row['meal_3'] ?></td>
                            <td> <?php echo $row['meal_4'] ?></td>
                            <td> <?php echo $row['meal_5'] ?></td>
                            <td> <?php echo $row['workout'] . " %"; ?></td>
                            <td> <?php echo $row['water'] . " Ltr" ?></td>

                            <!-- <td> <a href="edit.php?id=<?php echo $row['m_id']; ?>"> <button class="btn btn-info btn-sm">Edit</button></a></td> -->
                            <!-- <td> <a href="delete.php?id=<?php echo $row['m_id']; ?>"> <button class="btn btn-danger btn-sm">Delete</button></a></td> -->

                            <td> <a href="edit.php?id=<?php echo $row['m_id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td> <a href="delete.php?id=<?php echo $row['m_id']; ?>"><i class="fa-solid fa-trash-can"></i></a></td>

                        </tr>
                    <?php } ?>
                </tbody>
        </table>

        <div class="home">
            <a href="dashboard.php"><button class="btn btn-info">Home</button></a>
        </div>


    <?php } else {
                echo "<h2>No record found</h2> <a href='dashboard.php'><button class='btn btn-info'>Home</button></a>";
            }
            mysqli_close($conn);
    ?>
    </div>
</body>

</html>