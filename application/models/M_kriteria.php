<?php
 class M_kriteria extends CI_Model{
    public function SemuaData()
    {
       return $this->db->get('kriteria')->result_array();      
    
    }

 }