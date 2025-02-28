<?php
class Home extends Base
{

    public function show()
    {
       return $this->db->get('patients');
    }
    
}
