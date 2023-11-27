<?php
session_start();
if(!isset($_SESSION["username"]))
{
  header('location:../admin.php');

}
?>
<?php
include('header.php');
?>
<?php
include('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `ourmedia` WHERE `id`='$sid'";

$run = mysqli_query($conn,$sql);
$media = mysqli_fetch_assoc($run);


?>

<div class="container">
  <div class="title">Our Media</div>
  <form action="ourmediaupdatedata.php" method="post" enctype="multipart/form-data">
    <div class="user__details">
      <div class="input__box">
        <span class="details">Media Image</span>
        <input type="file" name="mediaimages" required>
      </div>

    </div>
    
    <div class="button">
    <input type="hidden" name="sid" value="<?php echo $media['id']; ?>">
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
