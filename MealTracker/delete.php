<?php

$meal_id = $_GET['id'];

// Database Connection
include 'connection.php';

// Write the query
$sql = "DELETE FROM record WHERE m_id = {$meal_id}";

$result = mysqli_query($conn, $sql) or die("Query failed");

header("Location: http://localhost/MealTracker/report.php");

mysqli_close($conn);
?>

?>