<?php
include('../dbcon.php');
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $id = $_POST['sid'];
    
    

    $qry="UPDATE `user` SET `username`='$username', `email`='$email', `password`='$password' WHERE `id`='$id';";

    
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <!-- <div class="alert alert-success">
    <strong>Success!</strong> Data Update Successfully.
  </div> -->
        <script>
        alert('Data Update Successfully');
        window.open('user.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }

    ?>