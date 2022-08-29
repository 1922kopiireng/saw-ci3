<?php
    class Hitungbobot extends CI_Controller{
        //load model yg sudah diambil dr db
        function __construct()
        {
            parent::__construct();
            $this->load->model('M_hitungbobot');
        }

        public function index (){
            $data['judul'] = 'Halaman Hitung Bobot'; //untuk judul tiap halaman biar enak
            $data['datacrips'] = $this->M_hitungbobot->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/hitungbobot/hitungbobot', $data);
            $this->load->view('template-ad/footer');
        }

        
    }