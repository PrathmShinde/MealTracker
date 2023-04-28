<?php
include 'connection.php';

session_start();

$user = $_SESSION['uname'];
$meal1 = mysqli_real_escape_string($conn, $_POST['Meal1']);
$meal2 = mysqli_real_escape_string($conn, $_POST['Meal2']);
$meal3 = mysqli_real_escape_string($conn, $_POST['Meal3']);
$meal4 = mysqli_real_escape_string($conn, $_POST['Meal4']);
$meal5 = mysqli_real_escape_string($conn, $_POST['Meal5']);
$Workout = mysqli_real_escape_string($conn, $_POST['workout']);
$Water = mysqli_real_escape_string($conn, $_POST['water']);

// Database Connection


// Write the query
$sql = "INSERT INTO record(user,meal_1,meal_2,meal_3,meal_4,meal_5,workout,water)VALUES('{$user}','{$meal1}','{$meal2}','{$meal3}','{$meal4}','{$meal5}','{$Workout}','{$Water}')";

$result = mysqli_query($conn, $sql) or die("Query failed");

header("Location: http://localhost/MealTracker/report.php");

mysqli_close($conn);
