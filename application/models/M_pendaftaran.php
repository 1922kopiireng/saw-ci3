<?php
    class M_pendaftaran extends CI_Model{
        public function SemuaData(){
        return $this->db->get('pendaftaran')->result_array();      
        
        }
    }
