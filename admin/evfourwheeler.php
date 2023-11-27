<?php
include('header.php');
?>
<?php
if(isset($_POST['Upload']))
{


    include('../dbcon.php');
    $evname = $_FILES['ev']['name'];
    $tempname = $_FILES['ev']['tmp_name'];

    $qry="INSERT INTO `upcomingproduct`(`ev_four_wheeler`) VALUES ('$evname')";
    // echo $qry; exit;

    move_uploaded_file($tempname, "./dataimg/$evname");
    
    
    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert('EV_Four_Wheeler Uploaded Successfully');
        </script>
        <?php
    }

}
?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container">
               <h2>Upload EV-FOUR WHEELER</h2>
  
                <form action="" method="post" enctype="multipart/form-data">
    
                <div class="form-group">
                <input type="file" class="form-control-file border" name="ev">
                </div>
                <input type="submit" name="Upload" value="Upload" class="btn btn-primary">
                </form>
                </div>
             </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

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
