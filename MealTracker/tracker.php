<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tracker.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>tracker page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3>The heart of your healthcare</h3>


            <form action="savedata.php" method="post">
                <div class="row inner-row">
                    <div class="col form-group col-one">

                        <label for="#">Meal 1</label>
                        <select class="form-control" name="Meal1">
                            <option selected>Select from below</option>
                            <option>YES</option>
                            <option>NO</option>
                        </select>

                        <label for="#">Meal 2</label>
                        <select class="form-control" name="Meal2">
                            <option selected>Select from below</option>
                            <option>YES</option>
                            <option>NO</option>
                        </select>

                        <label for="#">Meal 3</label>
                        <select class="form-control" name="Meal3">
                            <option selected>Select from below</option>
                            <option>YES</option>
                            <option>NO</option>
                        </select>

                        <label for="#">Meal 4</label>
                        <select class="form-control" name="Meal4">
                            <option selected>Select from below</option>
                            <option>YES</option>
                            <option>NO</option>
                        </select>

                        <label for="#">Meal 5</label>
                        <select class="form-control" name="Meal5" required>
                            <option selected>Select from below</option>
                            <option>YES</option>
                            <option>NO</option>
                        </select>

                        <!-- <div class="submit_button"> -->
                        <a href="dashboard.php"><button type="button" class="btn btn-info">Back</button></a>
                        <!-- </div> -->
                    </div>

                    <div class="col form-group col-two">
                        <label for="#">Workout</label>
                        <input type="text" class="form-control" name="workout" placeholder=" %" required>

                        <label for="#">Water</label>
                        <input type="text" class="form-control" name="water" placeholder="LTR" required>

                        <input class="submit" type="submit" value="SAVE">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>