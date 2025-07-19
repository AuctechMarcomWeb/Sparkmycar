<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<?php
include '../db_con.php';

$id = $_GET['id'];
$sql = "SELECT * FROM testimonials WHERE id = $id";
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
                  <h4 class="card-title">Edite Testimonilas Details</h4>
               </div>
               <div class="card-body">
                  <div class="form-validation">
                     <form class="needs-validation" method="POST" action="update_testimonial.php" novalidate
                        enctype="multipart/form-data">
                        <div class="row">
                           <input type="hidden" name="id" value="<?= $row['id'] ?>">
                           <div class="col-xl-12 form-group">
                              <label class="" for="validationCustom03">Client Name</label>
                              <input type="text" name="name" class="form-control" id="validationCustom03"
                                 placeholder="Enter Client Name" value="<?= $row['name'] ?>" required>
                           </div>


                        </div>
                        <div class="row">

                           <div class="col-xl-12 form-group">
                              <label class="" for="validationCustom01">Client Review</label>
                              <textarea name="client_review" class="form-control" id="validationCustom01"
                                 placeholder="Enter Client Review..." rows="5" required><?= $row['client_review'] ?></textarea>

                           </div>
                           <div class="mb-3 row">
                              <div class="col-lg-8 ms-auto">
                                 <button type="submit" name="submit" class="btn btn-primary">Update</button>
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