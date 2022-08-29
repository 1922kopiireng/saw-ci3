<?php
 class M_walimurid extends CI_Model{
    public function SemuaData()
    {
       return $this->db->get('wali_murid')->result_array();      
    
    }

 }