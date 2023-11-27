<?php
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $icon_name = $_POST['icon_name'];
    $number = $_POST['title'];
    $subtitle = $_POST['subtitle'];

    

    
    
    $qry="UPDATE `our_advertiser` SET `icon_name` = '$icon_name',`title` = '$title',`subtitle` = '$subtitle' WHERE `id` = $id";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('ouradvertisershow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>