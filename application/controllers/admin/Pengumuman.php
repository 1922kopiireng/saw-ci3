<?php
    class Pengumuman extends CI_Controller{
        //load model yg sudah diambil dr db
        function __construct()
        {
            parent::__construct();
            $this->load->model('M_pengumuman');
        }

        public function index (){
            $data['judul'] = 'Halaman Pengumuman'; //untuk judul tiap halaman biar enak
            $data['pengumuman'] = $this->M_pengumuman->Datapengumuman();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/pengumuman/pengumuman', $data);
            $this->load->view('template-ad/footer');
        }

        
    }