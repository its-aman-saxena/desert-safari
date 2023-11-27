<?php
include('header.php');
?>
<?php
if(isset($_POST['submit']))
{


    include('../dbcon.php');
    $title=$_POST['title'];
    $subtitle1=$_POST['subtitle1'];
    $subtitle2=$_POST['subtitle2'];
    $point1=$_POST['point1'];
    $point2=$_POST['point2'];
    $point3=$_POST['point3'];
    $point4=$_POST['point4'];
    $aboutimagename = $_FILES['aboutimage']['name'];
    $tempname = $_FILES['aboutimage']['tmp_name'];

    $qry="INSERT INTO `aboutcontent`(`title`,`subtitle1`,`subtitle2`,`point1`,`point2`,`point3`,`point4`,`image`) VALUES ('$title','$subtitle1','$subtitle2','$point1','$point2','$point3','$point4','$aboutimagename')";
    // echo $qry; exit;

    move_uploaded_file($tempname, "./dataimg/$aboutimagename");
    
    
    
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
  <div class="title">About</div>
  <script src="ckeditor/ckeditor.js"></script>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="user__details">
      <textarea id="editor" name="editor">
        
   </textarea>
      <div class="input__box">
        <span class="details">Image</span>
        <input type="file" name="aboutimage" required>
      </div>
    </div>
    
    <div class="button">
    <input type="submit" name="submit" value="submit">
    </div>
  </form>
<script>
  CKEDITOR.replace('editor');
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

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

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
