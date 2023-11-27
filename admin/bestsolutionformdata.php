<?php
include('../dbcon.php');
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $id = $_POST['sid'];
    $best_imagename = $_FILES['bestsolimage']['name'];
    $tempname = $_FILES['bestsolimage']['tmp_name'];

    move_uploaded_file($tempname, "./dataimg/$best_imagename");

    $qry="UPDATE `bestsolution` SET `title` = '$title', `subtitle` = '$subtitle',   `best_image` = '$best_imagename' WHERE `id` = $id;";

    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert('Data Update Successfully');
        window.open('bestsolutionshow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>