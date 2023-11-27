<?php
include('../dbcon.php');
    $title=$_POST['title'];
    $subtitle1=$_POST['subtitle1'];
    $point1=$_POST['point1'];
    $id = $_POST['sid'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempname, "./dataimg/$imagename");

    $qry="UPDATE `aboutcontent` SET `title` = '$title', `subtitle1` = '$subtitle1',  `point1` = '$point1',  `image` = '$imagename' WHERE `id` = $id;";

    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert('Data Update Successfully');
        window.open('aboutuscontentshow.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>