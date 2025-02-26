<?php
    require 'BaseController.php';
    require 'models/Patient.php';
    class HomeController extends BaseController
    {
        public $posts;

        public function __construct()
        {
            $this->folder = 'home';
            $this->posts = new Home;
        }
        public function index()
        {
            $data = ['posts' => $this->posts->show()];
            return $this->view('index',data);
        }
<<<<<<< HEAD
        public function error()
        {
            return $this->view('error');
        }
        // public function index(){
        //     //Goi DL Benh nhan
        //     $patientService = new PatientService();
        //     $patients = $patientService->getAllPatients();


        //     //Push DL len View
        //     include APP_ROOT.'/app/views/home/index.php';
        // }
=======
        
>>>>>>> 18a0232 (comment-fix commit)
    }

?>