<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<!--**********************************
   Content body start
   ***********************************-->
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-xl-4">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Testimonials</h5>
                   <?php
                  include '../db_con.php';
                  $testimonials_query = "SELECT * FROM testimonials";
                  $testimonials_query_run = mysqli_query($con, $testimonials_query);

                  if ($testimonials_total = mysqli_num_rows($testimonials_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $testimonials_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> 0 </p>';
                  }
                  ?>
               </div>
               <div class="card-body mb-0">
                  <h5 class="text-center text-white"><a href="add_testimonial.php" class="text-white">Testimonials List</a></h5>
               </div>
            </div>
         </div>
          <div class="col-xl-4">
            <div class="card text-white bg-primary">
             <div class="card-header">
                  <h5 class="card-title text-white">Total Gallery</h5>
                   <?php
                  include '../db_con.php';
                  $gallery_query = "SELECT * FROM gallery";
                  $gallery_query_run = mysqli_query($con, $gallery_query);

                  if ($gallery_total = mysqli_num_rows($gallery_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $gallery_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> 0 </p>';
                  }
                  ?>
               </div>
               <div class="card-body mb-0">
                  <h5 class="text-center text-white"><a href="gallery_list.php" class="text-white">Gallery List</a></h5>
               </div>
            </div>
         </div>
         <div class="col-xl-4">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Contact Query</h5>
                   <?php
                  include '../db_con.php';
                  $contact_query = "SELECT * FROM contact";
                  $contact_query_run = mysqli_query($con, $contact_query);

                  if ($contact_total = mysqli_num_rows($contact_query_run)) {
                     echo '<p class="btn bg-white text-primary btn-card"> ' . $contact_total . ' </p>';
                  } else {
                     echo '<p class="btn bg-white text-primary btn-card"> 0 </p>';
                  }
                  ?>
               </div>
               <div class="card-body mb-0">
                  <h5 class="text-center text-white"><a href="contact_list.php" class="text-white">Contact Query List</a></h5>
               </div>
            </div>
         </div>
        
         <div class="col-xl-3 d-none">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Last Deposit</h5>
                  <p class="card-text"></p>
                  <a href="javascript:void(0);" class="btn bg-white text-primary btn-card">0</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 d-none">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Deposit</h5>
                  <p class="card-text"></p>
                  <a href="javascript:void(0);" class="btn bg-white text-primary btn-card">0</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 d-none">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Earned</h5>
                  <p class="card-text"></p>
                  <a href="javascript:void(0);" class="btn bg-white text-primary btn-card">0</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 d-none">
            <div class="card text-white bg-primary">
               <div class="card-header">
                  <h5 class="card-title text-white">Total Withdrawal</h5>
                  <p class="card-text"></p>
                  <a href="javascript:void(0);" class="btn bg-white text-primary btn-card">0</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--**********************************
   Content body end
   ***********************************-->
<!--**********************************
   Footer start
   ***********************************-->
<?php include 'footer.php' ?>
<!--**********************************
   Footer end
   ***********************************-->
<!--**********************************
   Support ticket button start
   ***********************************-->
<!--**********************************
   Support ticket button end
   ***********************************-->
</div>
<!--**********************************
   Main wrapper end
   ***********************************-->
<!--**********************************
   Scripts
   ***********************************-->
<!-- Required vendors -->

</body>

</html>