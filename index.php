<?php
    require('config/connection.php');

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

?>