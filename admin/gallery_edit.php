<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<?php
include('../db_con.php');

$id = $_GET['id'];
$sql = "SELECT * FROM gallery WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Images</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" method="POST" action="update_gallery.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-12">
                                    
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <!-- Image Upload -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="images">Images <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" name="image" class="form-control" id="images" multiple required>
                                                <div class="invalid-feedback">Please upload images.</div>
                                            </div>
                                        </div>
                                        <!-- Submit Button -->
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button  type="submit" name="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
