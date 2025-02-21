<!DOCTYPE html>
<html lang="en">
<?php
function addHead($title) {
    const headContent = `
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>`$title`</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    `;
    
    document.head.innerHTML += headContent;
}
    addHead("Add patient");
?>
<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head> -->

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
            
            require('../../config/config.php');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>