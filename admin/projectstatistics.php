<?php
include('header.php');
?>
<?php
if(isset($_POST['submit']))
{


    include('../dbcon.php');
    $icon_name=$_POST['icon_name'];
    $number=$_POST['number'];
    $title=$_POST['title'];
    

    $qry="INSERT INTO `projectstatistics`(`icon_name`,`number`,`title`) VALUES ('$icon_name','$number','$title')";
    // echo $qry; exit;
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
  <div class="title">Project Statics</div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="user__details">
    <div class="input__box">
        <span class="details">Icon Name</span>
        <input type="text" name="icon_name" placeholder="Enter a Number"  required>
      </div>
      <div class="input__box">
        <span class="details">Number</span>
        <input type="text" name="number" placeholder="Enter a Number"  required>
      </div>
      <div class="input__box">
        <span class="details">Title</span>
        <input type="text" name="title" placeholder="Enter a Title"  required>
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
