<?php
include('header.php');
?>
<?php

include('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `app_setting` WHERE `id`='$sid'";

$run = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($run);


?> 

      <div class="container">
  <div class="title">App_Setting</div>
  <script src="ckeditor/ckeditor.js"></script>
  <form action="aboutcontentupdatedata.php" method="post" enctype="multipart/form-data">
    <div class="user__details">
      <!-- <div class="input__box">
        <span class="details">Title</span>
        <input type="text" name="title" placeholder="Enter a Title"  required>
      </div> -->
      <div class="input__box">
      <span class="details">Title1</span>  
      <textarea id="title1" name="title1">
      <?php echo $data['title1'];?>
    </textarea>
    </div>
    <div class="input__box">
      <span class="details">Title2</span>  
      <textarea id="title2" name="title2">
      <?php echo $data['title2'];?>
    </textarea>
    </div>
      <div class="input__box">
      <span class="details">Sub Title</span> 
      <textarea id="sub_title" name="sub_title">
      <?php echo $data['sub_title'];?>
      </textarea>
      </div>
      
      <div class="input__box">
      <span class="details">Address</span> 
      <textarea id="address" name="address">
      <?php echo $data['address'];?>
      </textarea>
     </div>
     <div class="input__box">
      <span class="details">Email</span> 
      <textarea id="email" name="email">
      <?php echo $data['email'];?>
      </textarea>
     </div>
     <div class="input__box">
      <span class="details">For Sales</span> 
      <textarea id="for_sales" name="for_sales">
      <?php echo $data['for_sales'];?>
      </textarea>
     </div>
     <div class="input__box">
      <span class="details">For Enquiry</span> 
      <textarea id="for_enquiry" name="for_enquiry">
      <?php echo $data['for_enquiry'];?>
      </textarea>
     </div>
     <div class="input__box">
      <span class="details">About_title</span> 
      <textarea id="about_albedovision1" name="about_albedovision1">
      <?php echo $data['about_albedovision1'];?>
      </textarea>
     </div>
     <div class="input__box">
      <span class="details">About_Sub_title</span> 
      <textarea id="about_albedovision2" name="about_albedovision2">
      <?php echo $data['about_albedovision2'];?>
      </textarea>
     </div>
     <div class="input__box">
      <span class="details">Copyright</span> 
      <textarea id="copyright" name="copyright">
      <?php echo $data['copyright'];?>
      </textarea>
     </div>
     <div class="input__box">
      <span class="details">Facebook</span> 
      <textarea id="facebook" name="facebook">
      <?php echo $data['facebook'];?>
      </textarea>
     </div>
     <div class="input__box">
      <span class="details">Instagram</span> 
      <textarea id="instagram" name="instagram">
      <?php echo $data['instagram'];?>
      </textarea>
     </div>
    </div>
    <div class="button">
    <input type="hidden" name="sid" value="<?php echo $updateabout['id']; ?>">
    <input type="submit" name="submit" value="submit">
    </div>
</div>
  </form>
  <script>
  CKEDITOR.replace('title1');
  CKEDITOR.replace('title2');
  CKEDITOR.replace('sub_title');
  CKEDITOR.replace('address');
  CKEDITOR.replace('email');
  CKEDITOR.replace('for_sales');
  CKEDITOR.replace('for_enquiry');
  CKEDITOR.replace('about_albedovision1');
  CKEDITOR.replace('about_albedovision2');
  CKEDITOR.replace('copyright');
  CKEDITOR.replace('facebook');
  CKEDITOR.replace('instagram');
</script>
</div>    
  </form>
</div>
            <!-- / Content -->

            

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
