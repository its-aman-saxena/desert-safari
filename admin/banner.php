<?php
include('header.php');
?>
<?php
if(isset($_POST['submit']))
{


    include('../dbcon.php');
    
    $aboutimagename = $_FILES['about']['name'];
    $tempname = $_FILES['about']['tmp_name'];

    $servicesimagename = $_FILES['services']['name'];
    $tempname = $_FILES['services']['tmp_name'];

    $albedoflashimagename = $_FILES['albedoflash']['name'];
    $tempname = $_FILES['albedoflash']['tmp_name'];

    $become_a_dealerimagename = $_FILES['become_a_dealer']['name'];
    $tempname = $_FILES['become_a_dealer']['tmp_name'];

    $galleryimagename = $_FILES['gallery']['name'];
    $tempname = $_FILES['gallery']['tmp_name'];

    $upcomingproductimagename = $_FILES['upcomingproduct']['name'];
    $tempname = $_FILES['upcomingproduct']['tmp_name'];

    $contactimagename = $_FILES['contact']['name'];
    $tempname = $_FILES['contact']['tmp_name'];

    $ourmediaimagename = $_FILES['ourmedia']['name'];
    $tempname = $_FILES['ourmedia']['tmp_name'];

    $qry="INSERT INTO `banner`(`about`,`services`,`albedoflash`,`become_a_dealer`,`gallery`,`upcomingproduct`,`contact`,`ourmedia`) VALUES ('$aboutimagename','$servicesimagename','$albedoflashimagename','$become_a_dealerimagename','$galleryimagename','$upcomingproductimagename','$contactimagename','$ourmediaimagename')";
    // echo $qry; exit;

    move_uploaded_file($tempname, "./dataimg/$aboutimagename");
    move_uploaded_file($tempname, "./dataimg/$servicesimagename");
    move_uploaded_file($tempname, "./dataimg/$albedoflashimagename");
    move_uploaded_file($tempname, "./dataimg/$become_a_dealerimagename");
    move_uploaded_file($tempname, "./dataimg/$galleryimagename");
    move_uploaded_file($tempname, "./dataimg/$upcomingproductimagename");
    move_uploaded_file($tempname, "./dataimg/$contactimagename");
    move_uploaded_file($tempname, "./dataimg/$ourmediaimagename");
    
    
    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert('Our media Uploaded Successfully');
        </script>
        <?php
    }

}
?>

<div class="container">
  <div class="title">Banner</div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="user__details">
    <div class="input__box">
        <span class="details">About Banner Image</span>
        <input type="file" name="about" required>
      </div>
      <div class="input__box">
        <span class="details">Services Banner Image</span>
        <input type="file" name="services" required>
      </div>
      <div class="input__box">
        <span class="details">Albedoflash Banner Image</span>
        <input type="file" name="albedoflash" required>
      </div>
      <div class="input__box">
        <span class="details">Become a dealer Banner Image</span>
        <input type="file" name="become_a_dealer" required>
      </div>
      <div class="input__box">
        <span class="details">Gallery Banner Image</span>
        <input type="file" name="gallery" required>
      </div>
      <div class="input__box">
        <span class="details">Upcoming Product Banner Image</span>
        <input type="file" name="upcomingproduct" required>
      </div>
      <div class="input__box">
        <span class="details">Contact Banner Image</span>
        <input type="file" name="contact" required>
      </div>
      <div class="input__box">
        <span class="details">Ourmedia Banner Image</span>
        <input type="file" name="ourmedia" required>
      </div>

    </div>
    
    <div class="button">
    <input type="submit" name="submit" value="submit">
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
