<?php
include('../dbcon.php');

$id = $_REQUEST['sid'];
 
    $qry="DELETE FROM `upcomingproduct2` WHERE `id`='$id';";

    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert('Data Deleted Successfully');
        window.open('ebusandvanshow.php','_self');
        </script>
        <?php
    }

    ?>