<?php
 class M_calonsiswa extends CI_Model{
    public function SemuaData()
    {
       return $this->db->get('calon_siswa')->result_array();      
    
    }

    // mengambil data yg sudah diinput 
    public function proses_tambah_data(){
        // "ygdiketik_dipinput" => $this->input->post('name_diinput'), 
        $data = [
            "nisn" => $this->input->post('nisn'),
            "nama_siswa" => $this->input->post('nama_siswa'),
            "jk_siswa" => $this->input->post('jk_siswa'),
            "tempat_lahir_siswa" => $this->input->post('tempat_lahir_siswa'),
            "tgl_lahir_siswa" => $this->input->post('tgl_lahir_siswa'),
            "asal_sekolah" => $this->input->post('asal_sekolah'),
            "no_telfon_siswa" => $this->input->post('no_telfon_siswa'),
            "agama_siswa" => $this->input->post('agama_siswa'),
            "alamat_siswa" => $this->input->post('alamat_siswa'),
            "saudara_siswa" => $this->input->post('saudara_siswa'),
            "jarak_siswa" => $this->input->post('jarak_siswa'),
            "password_siswa" => $this->input->post('password_siswa'),
        ];

        // insert dari ke db dari inputan $this->db->insert('nama-tabel', $data);
        $this->db->insert('calon_siswa', $data);
    }

    public function hapus_data($nisn){
        $this->db->where('nisn', $nisn); //mengambil data di halamannya
        $this->db->delete('calon_siswa'); //nama tabelnya

    } 

    //query CI mengambil data dari db untuk diedit seusi yg bersangkutan
    public function ambil_nisn ($nisn){
        return $this->db->get_where('calon_siswa', ['nisn' => 
        $nisn ])->row_array();
    }

    //post('name_diedit_data')
    public function proses_edit_data(){
        $data = [
            "nisn" => $this->input->post('nisn'),
            "nama_siswa" => $this->input->post('nama_siswa'),
            "jk_siswa" => $this->input->post('jk_siswa'),
            "tempat_lahir_siswa" => $this->input->post('tempat_lahir_siswa'),
            "tgl_lahir_siswa" => $this->input->post('tgl_lahir_siswa'),
            "asal_sekolah" => $this->input->post('asal_sekolah'),
            "no_telfon_siswa" => $this->input->post('no_telfon_siswa'),
            "agama_siswa" => $this->input->post('agama_siswa'),
            "alamat_siswa" => $this->input->post('alamat_siswa'),
            "saudara_siswa" => $this->input->post('saudara_siswa'),
            "jarak_siswa" => $this->input->post('jarak_siswa'),
            "password_siswa" => $this->input->post('password_siswa'),
        ];
        //query builder
        $this->db->where('nisn', $this->input->post('nisn'));
        $this->db->update('calonsiswa', $data); //update data
    }
 }