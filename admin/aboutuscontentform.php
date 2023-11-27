<?php
include('header.php');
?>
<?php
include('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `aboutcontent` WHERE `id`='$sid'";

$run = mysqli_query($conn,$sql);
$updateabout = mysqli_fetch_assoc($run);


?>

<div class="container">
  <div class="title">About</div>
  <script src="ckeditor/ckeditor.js"></script>
  <form action="aboutcontentupdatedata.php" method="post" enctype="multipart/form-data">
    <div class="user__details">
      <!-- <div class="input__box">
        <span class="details">Title</span>
        <input type="text" name="title" placeholder="Enter a Title"  required>
      </div> -->
      <div class="input__box">
      <span class="details">Title</span>  
      <textarea id="title" name="title">
      <?php echo $updateabout['title'];?>
    </textarea>
    </div>
      <div class="input__box">
      <span class="details">Sub Title</span> 
      <textarea id="subtitle1" name="subtitle1">
      <?php echo $updateabout['subtitle1'];?>
      </textarea>
      </div>
      
      <div class="input__box">
      <span class="details">Point</span> 
      <textarea id="point1" name="point1">
      <?php echo $updateabout['point1'];?>
      </textarea>
</div>
      <div class="input__box">
        <span class="details">Image</span>
        <input type="file" name="simg" required>
      </div>
    </div>
    <div class="button">
    <input type="hidden" name="sid" value="<?php echo $updateabout['id']; ?>">
    <input type="submit" name="submit" value="submit">
    </div>
</div>
  </form>
  <script>
  CKEDITOR.replace('title');
  CKEDITOR.replace('title2');
  CKEDITOR.replace('subtitle1');
  CKEDITOR.replace('point1');
</script>
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
