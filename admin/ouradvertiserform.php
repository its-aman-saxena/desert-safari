<?php
include('header.php');
?>
<?php
include('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `our_advertiser` WHERE `id`='$sid'";

$run = mysqli_query($conn,$sql);
$updatouradvertiser = mysqli_fetch_assoc($run);


?>

<div class="container">
  <div class="title">Our Media</div>
  <script src="ckeditor/ckeditor.js"></script>
  <form action="ouradvertiserupdatedata.php" method="post" enctype="multipart/form-data">
    <div class="user__details">
      <div class="input__box">
        <span class="details">Icon Name</span>
        <textarea id="icon_name" name="icon_name">
            <?php echo $updatouradvertiser['icon_name']; ?>
       </textarea>
      </div>
      <div class="input__box">
        <span class="details">Title</span>
        <textarea id="title" name="title">
        <?php echo $updatouradvertiser['title']; ?>
       </textarea>
      </div>
      <div class="input__box">
        <span class="details">Subtitle</span>
        <textarea id="subtitle" name="subtitle">
        <?php echo $updatouradvertiser['subtitle']; ?>
       </textarea>
      </div>
      

    </div>
    
    <div class="button">
    <input type="hidden" name="sid" value="<?php echo $updatouradvertiser['id']; ?>">
    <input type="submit" name="submit" value="submit">
    </div>
  </form>
  <script>
  CKEDITOR.replace('icon_name');
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
