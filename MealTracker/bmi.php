<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <title>BMI calculator</title>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
        <link rel="stylesheet" href="./bmi.css">

</head>

<body>
        <!-- partial:index.partial.html -->
        <div class="card">
                <div class="title">BMI CALCULATOR<i class="fas fa-bars"></i> <a href="dashboard.php">Back</a> </div>
                <div class="screen_1">
                        <div class="genderBlock male"><i class="fas fa-mars"></i>
                                <div class="genderText">MALE</div>
                        </div>
                        <div class="genderBlock female"><i class="fas fa-venus"></i>
                                <div class="genderText">FEMALE</div>
                        </div>
                        <div class="heightBlock">
                                <div class="blockText">HEIGHT(cm)</div>
                                <input class="heightInput" />
                        </div>
                        <div class="weightBlock">
                                <div class="blockText">WEIGHT(kg)</div>
                                <div class="weightNum">50</div>
                                <div class="weightMinus circleBtn">-</div>
                                <div class="weightPlus circleBtn">+</div>
                        </div>
                        <div class="ageBlock">
                                <div class="blockText">AGE</div>
                                <div class="ageNum">25</div>
                                <div class="ageMinus circleBtn">-</div>
                                <div class="agePlus circleBtn">+</div>
                        </div>
                </div>
                <div class="calculateBtn">CALCULATE YOUR BMI</div>
                <div class="screen_2">
                        <div class="resultTitle">Your Result</div>
                        <div class="blockOutside">
                                <div class="blockInside">
                                        <div class="resultRange">NORMAL</div>
                                        <div class="resultBMI">22.0</div>
                                        <div class="suggestBMI">
                                                <div class="suggestTitle">Suggest BMI range</div><span class="min">18.5</span><span>~</span><span class="max">24.9</span><span> kg/m2</span>
                                        </div>
                                        <div class="suggestion">You have a normal body weight. Good job!</div>
                                </div>
                        </div>
                </div>
        </div>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src="./script.js"></script>

</body>

</html>