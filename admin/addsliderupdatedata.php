<?php
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];
    
    move_uploaded_file($tempname, "./dataimg/$imagename");

    $qry="UPDATE `slider` SET `slider_image` = '$imagename' WHERE `id` = $id";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('addslidershow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>