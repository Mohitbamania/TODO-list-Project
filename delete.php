<?php
include "dbcon.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM `crud-operation`.`student` WHERE `id` = $id";

    $result = mysqli_query($con, $query);

    if(!$result){
        die("Query failed due to: " . mysqli_error($con));
    }
    else{
        header('location:index.php?delete_msg=Your data has been successfully deleted');
    }
}
?>
