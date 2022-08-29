<?php
 class M_datacrips extends CI_Model{
    public function SemuaData()
    {
       return $this->db->get('datacrips')->result_array();      
    
    }

 }