<?php
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $mediaimagesname = $_FILES['mediaimages']['name'];
    $tempname = $_FILES['mediaimages']['tmp_name'];

    
    move_uploaded_file($tempname, "./dataimg/$mediaimagesname");

    $qry="UPDATE `ourmedia` SET `mediaimage` = '$mediaimagesname' WHERE `id` = $id";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('ourmediashow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>