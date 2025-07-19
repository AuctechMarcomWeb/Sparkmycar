<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>
<?php
   $price_id=$_GET['price_id'];
   include 'db_con.php';
   $que="select * from add_price where price_id = $price_id";
   $res =mysqli_query($con,$que);
   $row=mysqli_fetch_array($res);
   
   ?>
<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Add Tasks</h4>
               </div>
               <div class="card-body">
                  <div class="form-validation">
                     <form class="needs-validation" method="POST" action="task_insert.php" novalidate >
                        <div class="row">
                           <div class="col-xl-6">
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom01">Social Media</label>
                                 <div class="col-lg-6">
                                 <input type="text" name="social_media" class="form-control" id="validationCustom01"  placeholder="." value="<?php echo $row['social_media'];?>">
                                    <div class="invalid-feedback">
                                       Choose
                                    </div>
                                 </div>
                              </div>
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom05">Status</label>
                                 <div class="col-lg-6">
                                    <select class="default-select wide form-control" name="status" id="validationCustom05">
                                       <option  data-display="Select" value="active">Active</option>
                                       <option value="inactive">Inactive</option>
                                    </select>
                                    <div class="invalid-feedback">
                                       Choose
                                    </div>
                                 </div>
                              </div>
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom04">Details</label>
                                 <div class="col-lg-6">
                                    <textarea class="form-control"  name="details" id="validationCustom04" placeholder="Enter Details"></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom03">Rate/Done</label>
                                 <div class="col-lg-6">
                                    <input type="text"  name="rate" class="form-control" id="validationCustom03" placeholder="Enter Rate" value="<?php echo $row['price'];?>">
                                 </div>
                              </div>
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom01">Id</label>
                                 <div class="col-lg-6">
                                    <input type="text" name="id" class="form-control" id="validationCustom01"  placeholder="." value="<?php echo $row['price_id'];?>">
                                 </div>
                              </div>
                              
                              <div class="mb-3 row">
                                 <label class="col-lg-4 col-form-label" for="validationCustom04">Link</label>
                                 <div class="col-lg-6">
                                   <input type="textbox" class="form-control" id="link" name="link" placeholder="Enter Link" required>
                                 </div>
                              </div>
                              <div class="mb-3 row">
                                 <div class="col-lg-3 ms-auto">
                                    <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
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