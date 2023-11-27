 <?php
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $fevimage = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];

    
    move_uploaded_file($tempname, "./dataimg/$fevimage");

    $qry="UPDATE `fevicon` SET `fevimage` = '$fevimage' WHERE `id` = $id";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('feviconshow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>