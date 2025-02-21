<?php

class Patient{
    // private $id;
    // private $fullName;
    // private $gender;

    public $db;
    
    public function __construct()
    {
        $this->db = new DB;
    }
    public function show()
    {
        return $this->db->get('patients');
    }
    public function create()
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $data = [
            'name' =>$name,
            'gender' =>$gender,
        ];
        $this->db->createPatient('patients',$data);
        header("location: index.php?page=Patient");
    }
    public function update()
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $data =[
            'name' => $name,
            'gender'=>$gender
        ];
        $this->db->updatePatient('patients',$data,'id',$_GET['id']);
        header("location: index.php?page=Patient");
    }
    public function delete()
    {
        return $this->db->delete('patients','id',$_GET['id']);
    }
    //Method
    // public function __construct($id, $fullName, $gender){
    //     $this->id = $id;
    //     $this->fullName = $fullName;
    //     $this->gender = $gender;
    // }

    // public function getId(){
    //     return $this->id;
    // }

    // public function getFullName(){
    //     return $this->fullName;
    // }

    // public function getGender(){
    //     return $this->gender;
    // }

    // public function setFullName($fullName){
    //     $this->fullName = $fullName;
    // }
    
}

?>