<?php
include('../dbcon.php');

$id = $_REQUEST['sid'];
 
    $qry="DELETE FROM `gallery` WHERE `id`='$id';";

    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert('Data Deleted Successfully');
        window.open('galleryshow.php','_self');
        </script>
        <?php
    }

    ?>