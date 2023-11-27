<?php
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $busname = $_FILES['bus']['name'];
    $tempname = $_FILES['bus']['tmp_name'];

    
    move_uploaded_file($tempname, "./dataimg/$busname");

    $qry="UPDATE `upcomingproduct2` SET `e_bus_and_van` = '$busname' WHERE `id` = $id";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('ebusandvanshow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>