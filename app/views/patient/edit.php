<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        form{
            width: 30%;
            margin: auto;
        }
        button{
            margin-top:10px;
            width: 100%;
        }
    </style>
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
            <input type="text" class="form-control" name="id" value="<?php echo $row['id'];?>">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'];?>">
        </div>
            <input type="submit" name="btn_submit" value="Edit">
    </form>
    <?php 
        if(isset($_GET['btn_submit'])){
            $id=$_GET['id'];
            $name=$_GET['name'];
            $gender=$_GET['gender'];
            
            require('../../config/config.php');
            // echo APP_ROOT;
            require_once APP_ROOT.'/app/controllers/PatientController.php';
            $patient=new Patient($id,$name,$gender);
    ?>
    <a
        class="text-center text-success mt-3"
        href="<?=  DOMAIN. 'public/?controller=patient&action=update&id=' . $patient->getId().'&name='.$patient->getFullName().'&gender='.$patient->getGender() ?> ">Confirm?</a>

    <?php
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>