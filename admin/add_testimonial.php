<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>

<div class="content-body">
   <div class="container-fluid">
      <!-- row -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Add Testimonial</h4>
               </div>
               <div class="card-body">
                  <div class="form-validation">
                     <form class="needs-validation" method="POST" action="testimonials_insert.php"
                        enctype="multipart/form-data">
                        <div class="row">

                           <div class="col-xl-12 form-group">
                              <label class="text-black" for="validationCustom03">Client Name</label>
                              <input type="text" name="name" class="form-control" id="validationCustom03"
                                 placeholder="Enter Client Name" required>
                           </div>


                        </div>
                        <div class="row">

                           <div class="col-xl-12 form-group">
                              <label class="text-black" for="validationCustom01">Client Review</label>
                              <textarea name="client_review" class="form-control" id="validationCustom01"
                                 placeholder="Enter Client Review..." rows="5" required></textarea>

                           </div>
                           <div class="mb-3 row">
                              <div class="col-lg-8 ms-auto">
                                 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- row -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Testimonial List</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table header-border table-responsive-sm">
                        <thead>
                           <tr>
                              <th>S No.</th>
                              <th>Client Name</th>
                              <th>Client Review</th>
                              <th colspan="2" align="center">Action</th>
                           </tr>
                        </thead>
                        <tbody id="tableBody">
                           <?php
                           include '../db_con.php';

                           $sel_que = "SELECT * FROM testimonials";
                           $res = mysqli_query($con, $sel_que);
                           $i = 1;
                           while ($row = mysqli_fetch_array($res))
                           {
                              ?>
                              <tr>
                                 <td><?= $i; ?></td>
                                 <td><?= $row['name']; ?></td>
                                 <td><?= $row['client_review']; ?></td>

                                 <!-- Edit Button -->
                                 <td>
                                    <!-- Edit Button -->
                                    <a href="testimonials_edit.php?id=<?= $row['id']; ?>"
                                       class="btn btn-primary shadow btn-xs sharp me-1" title="Edit">
                                       <i class="fas fa-pencil-alt" style="color:white;"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form method="POST" action="testimonials_dlt.php" style="display:inline;"
                                       onsubmit="return confirm('Are you sure?');">
                                       <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                       <button type="submit" class="btn btn-danger shadow btn-xs sharp" name="delete"
                                          title="Delete">
                                          <i class="fa fa-trash"></i>
                                       </button>
                                    </form>
                                 </td>

                              </tr>
                              <?php
                              $i++;
                           }
                           ?>
                        </tbody>
                     </table>

                  </div>
               </div>
               <div id="pagination" class="d-flex justify-content-center align-items-center mt-3 mb-5">
                  <button id="prev" class="btn btn-primary mr-2" aria-label="Previous"
                     style="padding: 2px 6px;font-size: 0.813rem;background:rgb(54,48,98)">
                     <i class="fa fa-arrow-left"></i>
                  </button>

                  <div id="pageNumbers" class="mx-3">
                     <label>
                        <input type="checkbox" id="page1"> Page 1
                     </label>
                     <label>
                        <input type="checkbox" id="page2"> Page 2
                     </label>
                     <!-- Add more checkboxes as needed -->
                  </div>

                  <button id="next" class="btn btn-primary ml-2" aria-label="Next"
                     style="padding: 2px 6px;font-size: 0.813rem;background:rgb(54,48,98)">
                     <i class="fa fa-arrow-right"></i>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php' ?>
<script>
   document.addEventListener('DOMContentLoaded', function () {
      const rowsPerPage = 7;
      const rows = document.querySelectorAll('#tableBody tr');
      const totalPages = Math.ceil(rows.length / rowsPerPage);
      let currentPage = 1;

      function showPage(page) {
         rows.forEach((row, index) => {
            row.style.display = (index >= (page - 1) * rowsPerPage && index < page * rowsPerPage) ? 'table-row' : 'none';
         });
         updateButtons(page);
      }

      function updateButtons(page) {
         document.getElementById('pageNumbers').textContent = `Page ${page} of ${totalPages}`;
         document.getElementById('prev').disabled = page === 1;
         document.getElementById('next').disabled = page === totalPages;
      }

      document.getElementById('prev').addEventListener('click', function () {
         if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
         }
      });

      document.getElementById('next').addEventListener('click', function () {
         if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
         }
      });

      showPage(1); // Show the first page by default
   });
</script>