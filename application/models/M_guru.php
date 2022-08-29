<?php
    class M_guru extends CI_Model{
        public function getAllGurupenerimaansiswa(){
        return $this->db->get('guru_penerimaan_siswa')->result_array();      
        
        }
    }
