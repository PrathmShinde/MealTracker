<?php

// Database Connection
include 'connection.php';

$meal_id = mysqli_real_escape_string($conn, $_POST['mid']);
$meal1 =  mysqli_real_escape_string($conn, $_POST['Meal1']);
$meal2 =  mysqli_real_escape_string($conn, $_POST['Meal2']);
$meal3 =  mysqli_real_escape_string($conn, $_POST['Meal3']);
$meal4 =  mysqli_real_escape_string($conn, $_POST['Meal4']);
$meal5 =  mysqli_real_escape_string($conn, $_POST['Meal5']);
$Workout = mysqli_real_escape_string($conn, $_POST['workout']);
$Water =  mysqli_real_escape_string($conn, $_POST['water']);

// Write the query
$sql = "UPDATE record SET meal_1='{$meal1}',meal_2='{$meal2}',meal_3='{$meal3}',meal_4='{$meal4}',meal_5='{$meal5}',workout='{$Workout}',water='{$Water}' WHERE m_id ='{$meal_id}'";

$result = mysqli_query($conn, $sql) or die("Query failed");

header("Location: http://localhost/MealTracker/report.php");

mysqli_close($conn);
