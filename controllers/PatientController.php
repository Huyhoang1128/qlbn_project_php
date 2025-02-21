<?php

  //  require  APP_ROOT."/app/services/PatientService.php";
require 'BaseController.php';
require 'models/Patient.php';

class PatientController extends BaseController{
  public function create($name,$gender){

    $patient = new Patient();
    $result = $patient->createPatient($name,$gender);
    return $result;

  }
  public function update($id,$name,$gender){
    
    $patient = new Patient();
    $result = $patient->updatePatient($id,$name,$gender);
    
  }
  public function delete($id) {
  
    $patient = new Patient();
    $result = $patient->deletePatient($id);
    $message = "Deletion successful!"; 
    require_once APP_ROOT . '\app\views\home\index.php';
  }
}