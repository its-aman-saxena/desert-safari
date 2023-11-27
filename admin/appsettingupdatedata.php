<?php
    
    include('../dbcon.php');
    
    $id = $_POST['sid'];
    $title1=$_POST['title1'];
    $title2=$_POST['title2'];
    $sub_title=$_POST['sub_title'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $for_sales=$_POST['for_sales'];
    $for_enquiry=$_POST['for_enquiry'];
    $about_albedovision1=$_POST['about_albedovision1'];
    $about_albedovision2=$_POST['about_albedovision2'];
    $copyright=$_POST['copyright'];
    $facebook=$_POST['facebook'];
    $instagram=$_POST['instagram'];
    
    
    $qry="UPDATE `app_setting` SET `title1`='$title1',`title2`='$title2',`sub_title`='$sub_title',`address`='$address',`email`='$email',`for_sales`='$for_sales',`for_enquiry`='$for_enquiry',`about_albedovision1`='$about_albedovision1',`about_albedovision2`='$about_albedovision2',`copyright`='$copyright',`facebook`='$facebook',`instagram`='$instagram' WHERE`id`='$id';";

    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
        alert('Data Update Successfully');
        window.open('appsettingalldata.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }
    ?>
