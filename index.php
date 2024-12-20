<?php  include('header.php'); ?>
<?php  include('dbcon.php'); ?>
    <div class="box1">
    <h2> All students</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Students</button>
    </div>
    <table class="table table-hover table-bordered table-striped">
        <thead> 
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile Number</th>
            <th>E-mail Id</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <?php

        $query = "select * from `crud-operation`.`student`";

        $result = mysqli_query($con, $query);

        if(!$result){
            die("query failed due to".mysqli_error($con));
        }
        else{
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                     <td><?php echo $row['id']?></td>
                     <td><?php echo $row['first_name']?></td>
                     <td><?php echo $row['last_name']?></td>
                     <td><?php echo $row['email_id']?></td>
                     <td><?php echo $row['mobile_number']?></td>
                     <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>
                     <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>                
                <?php
            }
        }
        ?>
        
    </table>

<?php

          if(isset($_GET['message'])){
              echo "<h6>".$_GET['message']."</h6>";
              }
?>

<?php

          if(isset($_GET['message_l'])){
              echo "<h6>".$_GET['message_l']."</h6>";
              }
?>

<?php

          if(isset($_GET['message_e'])){
              echo "<h6>".$_GET['message_e']."</h6>";
              }
?>

<?php

          if(isset($_GET['message_m'])){
              echo "<h6>".$_GET['message_m']."</h6>";
              }
?>
<?php

    if(isset($_GET['insert_msg'])){
        echo "<h6>".$_GET['insert_msg']."</h6>";
             }
?>

<?php

    if(isset($_GET['delete_msg'])){
        echo "<h6>".$_GET['delete_msg']."</h6>";
             }
?>

<?php

    if(isset($_GET['update_msg'])){
        echo "<h6>".$_GET['update_msg']."</h6>";
             }
?>


<form action="insert.php" method="post">    
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
    
      </div>
      <div class="modal-body">

        <div class="form-group">
        <lable for="f_name">First Name</lable>
        <input type="text" name="f_name" class="form-control" id="first">
        </div>
        <div class="form-group">
        <lable for="l_name">Last Name</lable>
        <input type="text" name="l_name" class="form-control" id="last">
        </div>
        <div class="form-group">
        <lable for="e_id">E-mail Id</lable>
        <input type="text" name="e_id" class="form-control" id="email">
        </div>
        <div class="form-group">
        <lable for="m_number">Mobile Number</lable>
        <input type="text" name="m_number" class="form-control" id="mobile">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_student" value="Add" onsubmit="validation();">
      </div>
    </div>
  </div>
</div>
</form>


<?php  include('footer.php'); ?>
   