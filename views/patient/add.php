<?php 
    include 'config/connection.php';
    include 'header.php';  
?>
    <h2>Add patient</h2>
    <script src="assets/js/script.js"></script>
    <form action="#" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <select class="form-control" id="gender" name="gender" required>
                <option value="">Choose gender</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success" name="btn_submit">
    </form>
    <?php 
        if(isset($_POST['btn_submit'])){
            $name=$_POST['name'];
            $gender=$_POST['gender'];
            
            require('../../config/connection.php');
            require_once APP_ROOT.'/app/controllers/PatientController.php';
            $patientController = new PatientController();
            $patientController->create($name,$gender);
            if($patientController){
                echo "<script>alert('Success!');</script>";
                // "<script>
                // setTimeout(function(){
                // header('Location: /phpMVC/public');
                // exit();},1000);
                // </script>"
            }
        }
    ?>