<?php
class Home
{
    public $db;
    public function __construct()
    {
        $this->db = new DB;
    }

    public function show()
    {
       return $this->db->get('patients');
    }
<<<<<<< HEAD
=======
    
>>>>>>> 18a0232 (comment-fix commit)
}
