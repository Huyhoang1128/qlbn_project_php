<?php

require 'BaseController.php';
require 'models/Patient.php';

class PatientController extends BaseController{
  public function create($name,$gender){

    $patient = new Patient();
    $result = $patient->create($name,$gender);
    return $result;

  }
  public function update($id,$name,$gender){
    
    $patient = new Patient();
    $result = $patient->edit($id,$name,$gender);

  }
  public function delete($id) {
  
    $patient = new Patient();
    $result = $patient->del($id);
    $message = "Deletion successful!"; 
    require_once APP_ROOT . '\app\views\home\index.php';
  }
}