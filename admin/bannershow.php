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
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container">
  <h2>Banner</h2>
  
  <table class="table">
    <thead>
    <?php
    include('../dbcon.php');
    $run=$conn-> query("SELECT * FROM `banner`");
    IF($run->num_rows>0)
    {
        ?>  
    <tr>
        <th>No</th>
        <th>About</th>
        <th>Services</th>
        <th>Albedoflash</th>
        <th>Become a Dealer</th>
        <th>Upcoming Product</th>
        <th>Contact</th>
        <th>Ourmedia</th>
      </tr>
    </thead>
    <?php
    $count=0;
    While($about=$run->fetch_assoc())
    {
        $count++;
    
    ?>
    <tbody>
      <tr>
        <td><?php echo $count;?></td>
        <td><?php echo $about['about'];?></td>
        <td><?php echo $about['services'];?></td>
        <td><?php echo $about['albedoflash'];?></td>
        <td><?php echo $about['become_a_dealer'];?></td>
        <td><?php echo $about['gallery'];?></td>
        <td><?php echo $about['upcomingproduct'];?></td>
        <td><?php echo $about['contact'];?></td>
        <td><?php echo $about['ourmedia'];?></td>
        <td><a class="btn btn-primary" href="bestsolutionform.php?sid=<?php echo $about['id'];?>">Edit</a></td>
        <td><a class="btn btn-primary" href="delete.php?sid=<?php echo $data['id'];?>&table_name=banner">Delete</a>
      </tr>      
      
      </tr>
    </tbody>
    <?php
    }
}
?>
</div>
            <!-- / Content -->

            
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
