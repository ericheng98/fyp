<?php
session_start();
// $_SESSION["loggedin"] = 0;
// echo $_SESSION["loggedin"];die;
$host = "localhost";
$user = "root";
$password = "";
$database = "FYP_database";

$conn = mysqli_connect($host, $user, $password, $database);

?>