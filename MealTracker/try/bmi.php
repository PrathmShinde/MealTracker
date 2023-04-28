<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bmi.css">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>BMI Calculator</title>
</head>

<body>

        <?php
        error_reporting(0);

        if ($_GET['submit']) { //if we dont write this statement, then $height & $width variables are get garbage values or 0.

                $weight = (int)$_GET['weight'];
                $height = (int)$_GET['height'];

                $height = $height / 100;          //convert into meter
                $height = $height * $height;

                $mainlvalue = $weight / $height;
                $bmi = substr($mainlvalue, 0, 4);
                $bmi = round($bmi, 6);

                if ($bmi <= 18.5) {
                        $output = "under-weight";
                } else if ($bmi > 18.5 && $bmi <= 24.9) {
                        $output = "Normal";
                } else if ($bmi > 24.9 && $bmi <= 29.4) {
                        $output = "Over Weight";
                } else
                        $output = "Obesed";
        }
        ?>

        <div class="container-fluid">

                <div class="row justify-content-center">
                        <div class="col-6 justify-content-center text-center">

                                <h1>BMI Calculator</h1>
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">

                                        <input name="weight" placeholder="Enter your weight in kg">
                                        <input name="height" placeholder="Enter your height in cm">
                                        <input type="submit" name="submit" value="Calculate">

                                </form>

                                <h1><?php echo $bmi  ?></h1>
                                <h1><?php echo $output  ?></h1>
                                <h1><?php echo $Error  ?></h1>

                        </div>
                </div>


        </div>

</body>

</html>