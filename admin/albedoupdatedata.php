<?php

include('../dbcon.php');
$id = $_POST['sid'];
$flashname = $_FILES['flash']['name'];
$tempname = $_FILES['flash']['tmp_name'];

// $qry="INSERT INTO `albedoflash`(`image`) VALUES ('$flashname')";
// echo $qry; exit;

move_uploaded_file($tempname, "./dataimg/$flashname");
    

    $qry="UPDATE `albedoflash` SET `image` = '$flashname' WHERE `id` = $id";

    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>

        <script>
        alert('Data Update Successfully');
        window.open('albedoflashshow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>