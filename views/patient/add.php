<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add patient</title>
    <script src="assets/js/script.js"></script>
</head>

<body>
    <form action="#" method="GET">
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
        if(isset($_GET['btn_submit'])){
            $name=$_GET['name'];
            $gender=$_GET['gender'];
            
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
</body>

</html>