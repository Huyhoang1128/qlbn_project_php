<?php
    require_once('../app/config/config.php');
    require_once APP_ROOT.'/app/libs/DbConnection.php';

    $controller = isset($_GET['controller'])?$_GET['controller']:'home';
    $action = isset($_GET['action'])?$_GET['action']:'index';

    if($controller == 'home'){
        require_once APP_ROOT.'/app/controllers/HomeController.php';
        $homeController = new HomeController();
        $homeController->index();
    } elseif ($controller == 'patient') {
        require_once APP_ROOT.'/app/controllers/PatientController.php';
        if($action=='create'){
            $patientController = new PatientController();
            $patientController->create();
        }
        if($action=='delete'){
            $id=$_GET['id'];    
            $patientController = new PatientController();
            $patientController->delete($id);
        }
        if($action=='update'){
            $id=$_GET['id'];
            $name=$_GET['name'];
            $gender=$_GET['gender'];
            $patientController = new PatientController();
            $patientController->update($id,$name,$gender);
        }
    }else {
        echo 'Nothing';
    }

?>