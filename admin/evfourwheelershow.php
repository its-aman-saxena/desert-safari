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
  <h2>EV-four wheeler</h2>
  
  <table class="table">
    <thead>
    <?php
    include('../dbcon.php');
    $run=$conn-> query("SELECT * FROM `upcomingproduct`");
    IF($run->num_rows>0)
    {
        ?>  
    <tr>
        <th>No.</th>
        <th>IMAGE<th>
        
      </tr>
    </thead>
    <?php
    $count=0;
    While($evfour=$run->fetch_assoc())
    {
        $count++;
    
    ?>
    <tbody>
      <tr>
        <td><?php echo $count;?></td>
        <td rowspan="5"><img src="dataimg/<?php echo $evfour['ev_four_wheeler'];?>" style="max-height:150px; max-width:1200;" /></td>
        <td><a href="evfourwheelerupdateform.php?sid=<?php echo $evfour['id'];?>">Edit</a></td>
        <td><a class="btn btn-primary" href="evfourwheelersdelete.php?sid=<?php echo $evfour['id'];?>">Delete</a></td>
        
       
        
        
        
        
      </tr>      
      
      </tr>
    </tbody>
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
