<?php
    require_once APP_ROOT.'/app/services/PatientService.php';

    class HomeController{
        public function index(){
            //Goi DL Benh nhan
            $patientService = new PatientService();
            $patients = $patientService->getAllPatients();


            //Push DL len View
            include APP_ROOT.'/app/views/home/index.php';
        }
    }

?>