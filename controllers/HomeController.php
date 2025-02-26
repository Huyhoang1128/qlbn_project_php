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
        
    }

?>