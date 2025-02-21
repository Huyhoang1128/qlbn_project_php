<?php

   require  APP_ROOT."/app/services/PatientService.php";


class PatientController {
    public function create($name,$gender){
    
    $patientService = new PatientService();
    $result = $patientService->createPatient($name,$gender);
    return $result;
  }
  public function delete($id) {

    $patientService = new PatientService();
    $result = $patientService->deletePatient($id);
    // Message for view (success/failure)
    $message = "Deletion successful!"; // Adjust message based on outcome

    // Include delete view and pass message
    require_once APP_ROOT . '\app\views\patient\delete.php';
  }
  public function update($id,$name,$gender){

    $patientService = new PatientService();
    $result = $patientService->updatePatient($id,$name,$gender);

  }
}