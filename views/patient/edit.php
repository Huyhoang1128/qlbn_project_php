<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <script src="assets/js/script.js"></script>
</head>

<body>
    <?php
        if(isset($_REQUEST['id'])){
            $conn=mysqli_connect("localhost","root","","qlbn");
            $id = $_REQUEST['id'];
            include_once('select.php');
            
        }
    ?>
    <form action="#" method="GET">
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $row['id'];?>" readonly>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
        </div>
        <div class="mb-3">
            <select class="form-control" id="gender" name="gender" required>
                <option>Male</option>
                <option>Female</option>
            </select>
            <!-- <label for="gender" class="form-label">Gender</label> -->
            <!-- <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'];?>"> -->
        </div>
            <input type="submit" class="btn btn-success" name="btn_submit" value="Edit">
    </form>
    <?php 
        if(isset($_GET['btn_submit'])){
            $id=$_GET['id'];
            $name=$_GET['name'];
            $gender=$_GET['gender'];
            
            require('../../config/connection.php');
            require_once APP_ROOT.'/app/controllers/PatientController.php';
            $patient=new Patient($id,$name,$gender);
    ?>
    <a
        class="text-center text-success mt-3"
        href="<?=  DOMAIN. 'public/?controller=patient&action=update&id=' . $patient->getId().'&name='.$patient->getFullName().'&gender='.$patient->getGender() ?> ">Confirm?</a>
    
    <?php
        }
    ?>
</body>
</html>