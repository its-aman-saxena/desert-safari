<?php
include('../dbcon.php');

$id = $_REQUEST['sid'];
 
    $qry="DELETE FROM `upcomingproduct` WHERE `id`='$id';";

    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert('Data Deleted Successfully');
        window.open('evfourwheelershow.php','_self');
        </script>
        <?php
    }

    ?>