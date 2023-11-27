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


<div class="container">
  <h2>App_Setting</h2>
  
  <table class="table">
    <thead>
    <?php
    include('../dbcon.php');
    $run=$conn-> query("SELECT * FROM `app_setting`");
    IF($run->num_rows>0)
    {
      
    $count=0;
    While($data=$run->fetch_assoc())
    {
        $count++;
    
    ?>
    <table class="table" class="success">
            <tr>
                <th colspan="10">App_setting</th>
    </tr>
    <tr>
        
        <th>Title</th>
        <td><?php echo $data['title1'];?></td>
    </tr>
    <tr>
        
        <th>Title 2</th>
        <td><?php echo $data['title2'];?></td>
    </tr>
    <tr>
        <th>Sub Title</th>
        <td><?php echo $data['sub_title'];?></td>
    </tr>
    <tr>
        <th>Adderess</th>
        <td><?php echo $data['address'];?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $data['email'];?></td>
    </tr>
    <tr>
        <th>For Sales</th>
        <td><?php echo $data['for_sales'];?></td>
    </tr>
    <tr>
        <th>For Enquiry</th>
        <td><?php echo $data['for_enquiry'];?></td>
    </tr>
    <tr>
        <th>About Albedovision Title</th>
        <td><?php echo $data['about_albedovision1'];?></td>
    </tr>
    <tr>
        <th>About Albedovision Sub Title</th>
        <td><?php echo $data['about_albedovision2'];?></td>
    </tr>
    <tr>
        <th>Copyright</th>
        <td><?php echo $data['copyright'];?></td>
    </tr>
    <tr>
        <th>Facebook</th>
        <td><?php echo $data['facebook'];?></td>
    </tr>
    <tr>
        <th>Instagram</th>
        <td><?php echo $data['instagram'];?></td>
    </tr>
    <tr>
        <th>Update</th>
        <td><a class="btn btn-primary" href="appsettingform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
    </tr>
        </table>
    <?php
    }
}
?>
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
