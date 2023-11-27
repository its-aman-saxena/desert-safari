<?php
include('header.php');
?>
<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $profile_description=$_POST['profile_description'];
    $profile_imagesname = $_FILES['profile_image']['name'];
    $tempname = $_FILES['profile_image']['tmp_name'];
    move_uploaded_file($tempname, "./dataimg/$profile_imagesname");
    $qry="INSERT INTO `testimonial`(`name`, `designation`, `profile_description`, `profile_image`) VALUES ('$name','$designation','$profile_description','$profile_imagesname')";

    $run=mysqli_query($conn,$qry);
   
    if($run==true)
    {
        ?>
        <script>
        alert('Testimonial Inserted Successfully');
        </script>
        <?php
    }
}
?>
<div class="container">
  <div class="title">Our Media</div>
  <script src="ckeditor/ckeditor.js"></script>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="user__details">
      <!-- <div class="input__box">
        <span class="details">Title</span>
        <input type="text" name="title" placeholder="Enter a Title"  required>
      </div> -->
      <div class="input__box">
      <span class="details">Name</span>  
      <textarea id="name" name="name">

       </textarea>
      </div>
      <div class="input__box">
      <span class="details">Designation</span> 
      <textarea id="designation" name="designation">

      </textarea>
      </div>
      
      <div class="input__box">
      <span class="details">Profile Description</span> 
      <textarea id="profile_description" name="profile_description">

      </textarea>
      </div>
      <div class="input__box">
        <span class="details">Profile Image</span>
        <input type="file" name="profile_image" required>
      </div>
    </div>
    <br><br><br>
    <div class="button">
    <input type="submit" name="submit" value="submit">
    </div>
  </form>
  <script>
  CKEDITOR.replace('name');
  CKEDITOR.replace('designation');
  CKEDITOR.replace('profile_description');
  
</script>
</div>


<!-- <div class="container">
  <div class="title">Our Media</div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="user__details">
      <div class="input__box">
        <span class="details">Name</span>
        <input type="text" name="name" placeholder="Enter Name"required>
      </div>
      <div class="input__box">
        <span class="details">Designation</span>
        <input type="text" name="designation" placeholder="Designation"  required>
      </div>
      <div class="input__box">
        <span class="details">Profile Description</span>
        <input type="text" name="profile_description" placeholder="Some text about image"  required>
      </div>
      <div class="input__box">
        <span class="details">Profile Image</span>
        <input type="file" name="simg" required>
      </div>

    </div>
    
    <div class="button">
    <input type="submit" name="submit" value="submit">
    </div>
  </form>
</div> -->
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
