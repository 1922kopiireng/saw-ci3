<?php
    class Pendaftaran extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_pendaftaran');
        }

        public function index (){
            $data['judul'] = 'Halaman Pendaftaran'; //untuk judul tiap halaman biar enak
            $data['pendaftaran'] = $this->M_pendaftaran->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/pendaftaran/pendaftaran', $data);
            $this->load->view('template-ad/footer');
        }
    }