<?php
session_start();

if (isset($_POST['submit'])) {
    include '../db_con.php';

    // Generate random price ID
    $price_id = rand(111, 9999999);

    // Use mysqli_real_escape_string to escape special characters
    $paragraph = mysqli_real_escape_string($con, $_POST['paragraph']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    // Check if image file is uploaded successfully
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        // Get the original image name and extension
        $original_image_name = $_FILES['image']['name'];
        $image_extension = strtolower(pathinfo($original_image_name, PATHINFO_EXTENSION)); // Get file extension in lowercase

        // Generate a unique name for the image
        $unique_image_name = uniqid('img_', true) . '.' . $image_extension;

        // Set the target directory and file path
        $target_dir = "testimonials_uploads/";
        $target_file = $target_dir . $unique_image_name;

        // Ensure target directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true); // Create directory if it doesn't exist
        }

        // Check if the file type is allowed (e.g., jpg, png, jpeg, gif)
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($image_extension, $allowed_extensions)) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // Prepare the SQL query to insert data
                $ins_que = "INSERT INTO add_price (price_id, paragraph, name, address, image) 
                            VALUES ('$price_id', '$paragraph', '$name', '$address', '$unique_image_name')";

                // Execute the query
                if (mysqli_query($con, $ins_que)) {
                    echo "<script>
                        alert('Data saved successfully!');
                        window.location='add_testimonial.php';
                        </script>";
                } else {
                    echo "Database Error: " . mysqli_error($con);
                }
            } else {
                echo "Sorry, there was an error uploading your file to the server.";
            }
        } else {
            echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "No file was uploaded or there was an error with the file upload.";
    }
} else {
    header('location:add_testimonial.php');
}
?>
