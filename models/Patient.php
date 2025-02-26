<?php

class Patient extends Base{

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
        $this->db->insert('patients',$data);
        header("location: index.php?page=Patient");
    }
    public function edit()
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $data =[
            'name' => $name,
            'gender'=>$gender
        ];
        $this->db->update('patients',$data,'id',$_GET['id']);
        header("location: index.php?page=Patient");
    }
    public function del()
    {
        return $this->db->delete('patients','id',$_GET['id']);
    }
    
}

?>