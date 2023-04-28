<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tracker.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Edit Page</title>
</head>

<body>

    <div class="container">

        <h1>UPDATE</h1>
        <?php

        // Database Connection
        include 'connection.php';

        //MYSQL Query

        $meal_id = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "SELECT * FROM record WHERE m_id = {$meal_id}";

        $result = mysqli_query($conn, $sql) or die("Query unsuccessfull");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <form action="update.php" method="post">
                    <div class="row inner-row">
                        <div class="col form-group col-one">

                            <input type="hidden" name="mid" value="<?php echo $row['m_id']; ?>">

                            <label for="#">Meal 1</label>
                            <select class="form-control" name="Meal1">
                                <option hidden><?php echo $row['meal_1']; ?></option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>

                            <label for="#">Meal 2</label>
                            <select class="form-control" name="Meal2">
                                <option hidden><?php echo $row['meal_2']; ?></option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>

                            <label for="#">Meal 3</label>
                            <select class="form-control" name="Meal3">
                                <option hidden><?php echo $row['meal_3']; ?></option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>

                            <label for="#">Meal 4</label>
                            <select class="form-control" name="Meal4">
                                <option hidden><?php echo $row['meal_4']; ?></option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>

                            <label for="#">Meal 5</label>
                            <select class="form-control" name="Meal5">
                                <option hidden><?php echo $row['meal_5']; ?></option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>


                            <div class="submit_button">
                                <button class="btn btn-info"><a href="dashboard.html">Back</a></button>
                            </div>
                        </div>
                        <div class="col form-group col-two">
                            <label for="#">Workout</label>
                            <input type="text" class="form-control" name="workout" placeholder=" %" value="<?php echo $row['workout']; ?>">

                            <label for="#">Water</label>
                            <input type="text" class="form-control" name="water" placeholder="LTR" value="<?php echo $row['water']; ?>">

                            <input class="submit" type="submit" value="UPDATE">
                        </div>
                    </div>
                </form>
        <?php
            }
        }
        ?>
    </div>

</body>

</html>