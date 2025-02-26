<?php
    $id=$_GET['id'];
    require('../../config/connection.php');
    // echo APP_ROOT;
    require_once APP_ROOT.'/app/controllers/PatientController.php';
    $patientController = new PatientController();
    $patientController->delete($id);
    if($patientController){
        echo "<script>alert('Success!');</script>";
    }

?>