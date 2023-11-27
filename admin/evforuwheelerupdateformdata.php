<?php
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $evev_four_wheeler= $_FILES['ev']['name'];
    $tempname = $_FILES['ev']['tmp_name'];

    
    move_uploaded_file($tempname, "./dataimg/$evev_four_wheeler");

    $qry="UPDATE `upcomingproduct` SET `ev_four_wheeler` = '$evev_four_wheeler' WHERE `id` = $id";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('evfourwheelershow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>