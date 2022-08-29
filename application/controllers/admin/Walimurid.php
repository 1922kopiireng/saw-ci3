<?php
    class Walimurid extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('M_walimurid');
        }
        
        public function index (){
            $data['judul'] = 'Halaman Wali Murid'; //untuk judul tiap halaman biar enak
            $data['walimurid'] = $this->M_walimurid->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/walimurid/walimurid', $data);
            $this->load->view('template-ad/footer');
        }
    }