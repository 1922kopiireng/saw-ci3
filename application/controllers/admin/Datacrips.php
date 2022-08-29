<?php
    class Datacrips extends CI_Controller{
        //load model yg sudah diambil dr db
        function __construct()
        {
            parent::__construct();
            $this->load->model('M_datacrips');
        }

        public function index (){
            $data['judul'] = 'Halaman Data Crips'; //untuk judul tiap halaman biar enak
            $data['datacrips'] = $this->M_datacrips->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/datacrips/datacrips', $data);
            $this->load->view('template-ad/footer');
        }

        public function tambahdatacrips (){
            $data['judul'] = 'Halaman Tambah Data Crips';
            $data['datacrips'] = $this->M_datacrips->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/datacrips/datacrips');
            $this->load->view('template-ad/header');
        }

        
    }