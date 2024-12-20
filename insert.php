<?php
include 'dbcon.php';
if(isset($_POST['add_student'])){
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['e_id'];
    $mobile = $_POST['m_number'];
}

if($fname == ""){
    header('location:index.php?message=Please enter your First Name');
}

if($lname == ""){
    header('location:index.php?message_l=Please enter your Last Name');
}

if($email == ""){
    header('location:index.php?message_e=Please enter your E-mail');
}

if($mobile == ""){
    header('location:index.php?message_m=Please enter your Mobile Number');
}

else{

    $query = "INSERT INTO `crud-operation`.`student` (`first_name`, `last_name`, `email_id`, `mobile_number`) VALUES ('$fname', ' $lname', '$email', '$mobile')";

    $result = mysqli_query($con, $query);
    if(!$result){
        die("query failed due to".mysqli_error());
    }
    else{
        header('location:index.php?insert_msg=Your data has been successfully added');
    }
}
?>