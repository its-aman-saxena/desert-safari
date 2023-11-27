<?php
include('header.php');
?>
<?php
include('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `projectstatistics` WHERE `id`='$sid'";

$run = mysqli_query($conn,$sql);
$updatestatic = mysqli_fetch_assoc($run);


?>
<div class="container">
  <div class="title">Project Statics</div>
  <script src="ckeditor/ckeditor.js"></script>
  <form action="projectstatisticsformdata.php" method="post" enctype="multipart/form-data">
    <div class="user__details">
    
    <div class="input__box">
      <span class="details">Icon</span>  
      <textarea id="icon_name" name="icon_name">
      <?php echo $updatestatic['icon_name'];?>
    </textarea>
    </div>
      <div class="input__box">
        <span class="details">Number</span>
     <textarea id="number" name="number">
      <?php echo $updatestatic['number'];?>
    </textarea>
      </div>
      <div class="input__box">
        <span class="details">Title</span>
        <textarea id="title" name="title">
      <?php echo $updatestatic['title'];?>
    </textarea>
      </div>
    </div>    
    <div class="button">
    <input type="hidden" name="sid" value="<?php echo $updatestatic['id']; ?>">
    <input type="submit" name="submit" value="submit">
    </div>
    <script>
  CKEDITOR.replace('icon_name');
  CKEDITOR.replace('number');
  CKEDITOR.replace('title');
</script>
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
