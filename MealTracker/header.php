<?php

session_start();

if (!isset($_SESSION["uname"])) {
    header("Location: http://localhost/MealTracker/index.php");
}
