<?php
include('../db_con.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $msg = '';

    
    if ($_FILES['image']['name'] != '') {
        $target_dir = "gallery_uploads/";
        $file_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $unique_name = uniqid('img_', true) . '.' . $file_ext;
        $target_file = $target_dir . $unique_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
           
            $old_query = mysqli_query($con, "SELECT image FROM gallery WHERE id = $id");
            $old_data = mysqli_fetch_assoc($old_query);
            $old_image = $old_data['image'];

          
            if (file_exists("gallery_uploads/$old_image")) {
                unlink("gallery_uploads/$old_image");
            }

           
            $sql = "UPDATE gallery SET image = '$unique_name' WHERE id = $id";
            if (mysqli_query($con, $sql)) {
                $msg = "Image updated successfully!";
            } else {
                $msg = "Database update failed.";
            }
        } else {
            $msg = "Failed to upload new image.";
        }
    } else {
        $msg = "No image uploaded.";
    }

   
    echo "<script>
            alert('$msg');
            window.location = 'gallery_list.php';
          </script>";
    exit;
}
?>

