<?php
include('../dbcon.php');
$id=$_REQUEST['sid'];
$tablename=$_REQUEST['table_name'];
$qry="DELETE FROM {$tablename} WHERE `id`='$id'";

$run=mysqli_query($conn,$qry);
if($run==true)
{
    ?>
    <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
    <script>
          
            alert('Data Inserted Successfully');
            </script>
            <?php
        
    
}
?>
