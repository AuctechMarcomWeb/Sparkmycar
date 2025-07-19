<?php
session_start();

if (isset($_POST['submit'])) {
    include '../db_con.php';
    $name = $_POST['name'];
    $client_review = $_POST['client_review'];

    $sql = "INSERT INTO testimonials (name, client_review) VALUES ('$name', '$client_review')";
    mysqli_query($con, $sql);

    header('Location: add_testimonial.php');
} else {
    header('Location: add_testimonial.php');
}
?>
