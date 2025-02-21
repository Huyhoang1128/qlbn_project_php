<?php
    $id=$_GET['id'];
    require('../../config/config.php');
    // echo APP_ROOT;
    require_once APP_ROOT.'/app/controllers/PatientController.php';
    $patientController = new PatientController();
    $patientController->delete($id);
    // $patientService=new PatientService();
    // $patientService->deletePatient($id);
    if($patientController){
        echo "<script>alert('Success!');</script>";
    }

?>