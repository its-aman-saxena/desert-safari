<?php
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $galleryname = $_FILES['gallery']['name'];
    $tempname = $_FILES['gallery']['tmp_name'];

    
    move_uploaded_file($tempname, "./dataimg/$galleryname");

    $qry="UPDATE `gallery` SET `image_gallery` = '$galleryname' WHERE `id` = $id";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('galleryshow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>