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
}
