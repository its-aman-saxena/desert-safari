<?php
include('header.php');
?>
<?php
include('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `bestsolution` WHERE `id`='$sid'";

$run = mysqli_query($conn,$sql);
$updateabout = mysqli_fetch_assoc($run);


?>

<div class="container">
  <div class="title">Home Page_Best Solution</div>
  <script src="ckeditor/ckeditor.js"></script>
  <form action="bestsolutionformdata.php" method="post" enctype="multipart/form-data">
    <div class="user__details">
    
    <div class="input__box">
      <span class="details">Title</span> 
      <textarea id="title" name="title">
      <?php echo $updateabout['title'];?>
      </textarea>
      </div>
      <div class="input__box">
      <span class="details">Sub Title</span> 
      <textarea id="subtitle" name="subtitle">
      <?php echo $updateabout['subtitle'];?>
      </textarea>
      </div>
      <div class="input__box">
        <span class="details">Image</span>
        <input type="file" name="bestsolimage" required>
      </div>

    </div>
    
    <div class="button">
    <input type="hidden" name="sid" value="<?php echo $updateabout['id']; ?>">
    <input type="submit" name="submit" value="submit">
    </div>
  </form>
  <script>
  CKEDITOR.replace('title');
  CKEDITOR.replace('subtitle');
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
