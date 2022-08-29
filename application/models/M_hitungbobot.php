<?php
    class M_hitungbobot extends CI_Model{
        public function SemuaData(){
        return $this->db->get('hitung_bobot')->result_array();      
        
        }
    }
