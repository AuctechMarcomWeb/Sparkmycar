<?php
$servername = "localhost";
$username = "u622085619_sparkmycar";
$password = "Auctech@321";
$database = "u622085619_sparkmycar";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    error_log("Connection failed: " . $con->connect_error); // log error
    die("Connection failed. Please try again later.");
}
?>
