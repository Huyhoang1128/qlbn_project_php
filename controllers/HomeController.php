<?php
    require 'BaseController.php';
    require 'models/Patient.php';
    class HomeController extends BaseController
    {
        public function index(){
            //Goi DL Benh nhan
            $patientService = new PatientService();
            $patients = $patientService->getAllPatients();


            //Push DL len View
            include APP_ROOT.'/app/views/home/index.php';
        }
    }

?>