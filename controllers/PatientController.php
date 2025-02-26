<?php

<<<<<<< HEAD
  //  require  APP_ROOT."/app/services/PatientService.php";
=======
>>>>>>> 18a0232 (comment-fix commit)
require 'BaseController.php';
require 'models/Patient.php';

class PatientController extends BaseController{
  public function create($name,$gender){

    $patient = new Patient();
<<<<<<< HEAD
    $result = $patient->createPatient($name,$gender);
=======
    $result = $patient->create($name,$gender);
>>>>>>> 18a0232 (comment-fix commit)
    return $result;

  }
  public function update($id,$name,$gender){
    
    $patient = new Patient();
<<<<<<< HEAD
    $result = $patient->updatePatient($id,$name,$gender);
    
=======
    $result = $patient->edit($id,$name,$gender);

>>>>>>> 18a0232 (comment-fix commit)
  }
  public function delete($id) {
  
    $patient = new Patient();
<<<<<<< HEAD
    $result = $patient->deletePatient($id);
=======
    $result = $patient->del($id);
>>>>>>> 18a0232 (comment-fix commit)
    $message = "Deletion successful!"; 
    require_once APP_ROOT . '\app\views\home\index.php';
  }
}