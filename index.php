<?php
    require('config/config.php');

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if(isset($_GET['action'])){
            $action=$_GET['action'];
        }else{
            $action= 'index';
        }
    } else{
        $page ='page';
        $action='index';
    }
    require "route.php";
<<<<<<< HEAD
    // $controller = isset($_GET['controller'])?$_GET['controller']:'home';
    // $action = isset($_GET['action'])?$_GET['action']:'index';

    // if($controller == 'home'){
    //     require_once APP_ROOT.'/app/controllers/HomeController.php';
    //     $homeController = new HomeController();
    //     $homeController->index();
    // } elseif ($controller == 'patient') {
    //     require_once APP_ROOT.'/app/controllers/PatientController.php';
    //     if($action=='create'){
    //         $patientController = new PatientController();
    //         $patientController->create();
    //     }
    //     if($action=='delete'){
    //         $id=$_GET['id'];    
    //         $patientController = new PatientController();
    //         $patientController->delete($id);
    //     }
    //     if($action=='update'){
    //         $id=$_GET['id'];
    //         $name=$_GET['name'];
    //         $gender=$_GET['gender'];
    //         $patientController = new PatientController();
    //         $patientController->update($id,$name,$gender);
    //     }
    // }else {
    //     echo 'Nothing';
    // }
=======
>>>>>>> 18a0232 (comment-fix commit)

?>