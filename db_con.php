<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sparkmycar_db";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    error_log("Connection failed: " . $con->connect_error); // log error
    die("Connection failed. Please try again later.");
}
?>
