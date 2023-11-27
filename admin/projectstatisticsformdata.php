<?php
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $icon_name = $_POST['icon_name'];
    $number = $_POST['number'];
    $title = $_POST['title'];

    

    
    
    $qry="UPDATE `projectstatistics` SET `icon_name` = '$icon_name',`number` = '$number',`title` = '$title' WHERE `id` = $id";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('projectstatisticsshow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>