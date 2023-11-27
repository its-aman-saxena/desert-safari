<?php
include('header.php');
?>
<?php
if(isset($_POST['submit']))
{


    include('../dbcon.php');
    $title1=$_POST['title1'];
    $title2=$_POST['title2'];
    $sub_title=$_POST['sub_title'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $for_sales=$_POST['for_sales'];
    $for_enquiry=$_POST['for_enquiry'];
    $about_albedovision1 = $_POST['about_albedovision1'];
    $about_albedovision2 = $_POST['about_albedovision2'];
    $copyright = $_POST['copyright'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    
    

    
    

    

    // $qry="INSERT INTO `app_setting`(`address`, `email`, `for_sales`, `for_enquiry`, `about_albedovision`,`copyright`,`facebook`,`instagram`,`logo`,`fevicon`) VALUES ($address,$email,$for_sales,$for_enquiry,$about_albedovision,$copyright,$facebook,$instagram,$image_logo,$image_fevicon)";

    $qry="INSERT INTO `app_setting`(`title1`,`title2`,`sub_title`,`address`, `email`, `for_sales`, `for_enquiry`, `about_albedovision1`,`about_albedovision2`, `copyright`, `facebook`, `instagram`) VALUES ('$title1','$title2','$sub_title','$address','$email','$for_sales','$for_enquiry','$about_albedovision1','$about_albedovision2','$copyright','$facebook','$instagram')";

    
    // echo $qry; exit;

    $run=mysqli_query($conn,$qry);
    
    if($run==true)
    {
        ?>
        <script>
        alert('Data Inserted Successfully');
        </script>
        <?php
    }
}
?>

<div class="container">
  <h2>App_setting</h2>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="title">Title 1:</label>
      <input type="text" class="form-control" id="title1" placeholder="Enter password" name="title1">
    </div>
    <div class="form-group">
      <label for="title">Title 2:</label>
      <input type="text" class="form-control" id="title2" placeholder="Enter password" name="title2">
    </div>
    <div class="form-group">
      <label for="sub_title">Sub Title:</label>
      <input type="text" class="form-control" id="sub_title" placeholder="Enter password" name="sub_title">
    </div>
    
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter password" name="address">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="for_sales">For_Sale:</label>
      <input type="text" class="form-control" id="for_sales" placeholder="for_sales" name="for_sales">
    </div>
    <div class="form-group">
      <label for="for_enquiry">For Enquiry:</label>
      <input type="text" class="form-control" id="for_enquiry" placeholder="For Enqiry" name="for_enquiry">
    </div>
    <div class="form-group">
      <label for="about_albedovision">About Albedovision:</label>
      <input type="text" class="form-control" id="about_albedovision1" placeholder="Enter Abour Albedovision" name="about_albedovision1">
    </div>
    <div class="form-group">
      <label for="about_albedovision">About Albedovision:</label>
      <input type="text" class="form-control" id="about_albedovision2" placeholder="Enter Abour Albedovision" name="about_albedovision2">
    </div>
    <div class="form-group">
      <label for="copyright">Copyright:</label>
      <input type="text" class="form-control" id="copyright" placeholder="copyright" name="copyright">
    </div>
    <div class="form-group">
      <label for="facebook">Facebook:</label>
      <input type="text" class="form-control" id="facebook" placeholder="facebook" name="facebook">
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <input type="text" class="form-control" id="instagram" placeholder="Instagram" name="instagram">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="submit">
    <div class="form-group" class="text-center">
    <!-- <input type="submit" class="btn btn-primary" value="Submit" name="Submit"> -->
    <!-- <input type="submit" name="submit" class="btn btn-primary" value="submit"> -->
</div>
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
