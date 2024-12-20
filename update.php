<?php  include('header.php'); ?>
<?php  include('dbcon.php'); ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM `crud-operation`.`student` WHERE `id`=$id";

        $result = mysqli_query($con, $query);

        if(!$result){
            die("query failed due to".mysqli_error($con));
        }
        else{
            $row = mysqli_fetch_assoc($result);
           
        }

}
?>
<?php

if(isset($_POST['update_student'])){

    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }
    
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['e_id'];
    $mobile = $_POST['m_number'];

    $query = "UPDATE `crud-operation`.`student` SET `first_name`='$fname', `last_name`='$lname', `email_id`='$email', `mobile_number`='$mobile' WHERE `id`='$idnew'";


    $result = mysqli_query($con, $query);

    if(!$result){
        die("query failed due to".mysqli_error($con));
    }
    else{
        header('location:index.php?update_msg=Your data has been successfully updated');
    }

}
?>


<form action="update.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
        <lable for="f_name">First Name</lable>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ?>">
        </div>
        <div class="form-group">
        <lable for="l_name">Last Name</lable>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name'] ?>">
        </div>
        <div class="form-group">
        <lable for="e_id">E-mail Id</lable>
        <input type="text" name="e_id" class="form-control" value="<?php echo $row['email_id'] ?>">
        </div>
        <div class="form-group">
        <lable for="m_number">Mobile Number</lable>
        <input type="text" name="m_number" class="form-control" value="<?php echo $row['mobile_number'] ?>">
        </div>
        <input type="submit" class="btn btn-success" name="update_student" value="Update">
</form>




<?php  include('footer.php');   ?>