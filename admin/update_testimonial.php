<?php
include '../db_con.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $client_review = $_POST['client_review'];

    // Update query
    $upd_que = "UPDATE testimonials SET name = '$name', client_review = '$client_review' WHERE id = $id";

    // Execute the update query
    if (mysqli_query($con, $upd_que)) {
        echo "<script>
                alert('Data updated successfully!');
                window.location = 'add_testimonial.php';
              </script>";
    } else {
        echo "<script>
                alert('Error updating record: " . mysqli_error($con) . "');
                window.location = 'add_testimonial.php';
              </script>";
    }
} else {
    header('Location: add_testimonial.php');
}
?>
