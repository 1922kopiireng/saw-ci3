<?php

use LDAP\Result;

    class M_pengumuman extends CI_Model{
        public function pengumuman(){
            // $query = $this->db->get('pengumuman');
            // return $query->result_array(); cara ini bisa

            return $this->db->get('pengumuman')->result_array();
            $this->db->select('*');
            $this->db->from('pendaftaran');
            $this->db->join('');
            return $this->db->join('pendaftaran', 'calon_siswa'); 
              //mengamil data seluruh pengumuman menjadi array

        }
    }