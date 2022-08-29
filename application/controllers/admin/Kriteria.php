<?php
    class Kriteria extends CI_Controller{
        //load model yg sudah diambil dr db
        function __construct()
        {
            parent::__construct();
            $this->load->model('M_kriteria');
        }

        public function index (){
            $data['judul'] = 'Halaman Kriteria'; //untuk judul tiap halaman biar enak
            $data['kriteria'] = $this->M_kriteria->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/kriteria/kriteria', $data);
            $this->load->view('template-ad/footer');
        }

        public function tambahkriteria (){
            $data['judul'] = 'Halaman Tambah Data Kriteria';
            $data['kriteria'] = $this->M_kriteria->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/kriteria/tambahDkriteria');
            $this->load->view('template-ad/header');
        }

        
    }