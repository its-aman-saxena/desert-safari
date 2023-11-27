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
  <h2>Our Solution</h2>
  <h2 align="right"><td><a class="btn btn-success" href="oursolution.php">Add Our Solution</a></h2>
  
  <table class="table">
    <thead>
    <?php
    include('../dbcon.php');
    $run=$conn-> query("SELECT * FROM `oursolution`");
    IF($run->num_rows>0)
    {
        ?>  
    <tr>
        <th>No.</th>
        <th>ICON</th>
        <th>TITLE</th>
        <th>SUB TITLE</th>
      </tr>
    </thead>
    <?php
    $count=0;
    While($data=$run->fetch_assoc())
    {
        $count++;
    
    ?>
    <tbody>
      <tr>
        <td><?php echo $count;?></td>
        <td><?php echo $data['icon'];?></td>
        <td><?php echo $data['title'];?></td>
        <td><?php echo $data['subtitle'];?></td>
        <td><a class="btn btn-primary" href="oursolutionform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
        <td><a class="btn btn-primary" href="oursolutiondelete.php?sid=<?php echo $data['id'];?>">Delete</a></td>
       
        
        
        
        
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
