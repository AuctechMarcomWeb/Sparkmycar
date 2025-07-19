<?php
include('../db_con.php');

if (isset($_POST['submit'])) {
    $target_dir = "gallery_uploads/";

    foreach ($_FILES['images']['name'] as $key => $original_name) {
       
        $file_ext = pathinfo($original_name, PATHINFO_EXTENSION);

     
        $unique_name = uniqid('img_', true) . '.' . $file_ext;

       
        $target_file = $target_dir . $unique_name;

       
        if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
          
            $sql = "INSERT INTO gallery (image) VALUES ('$unique_name')";
            mysqli_query($con, $sql);
        }
    }

    
    header('Location: gallery_list.php');
    exit;
}
?>
