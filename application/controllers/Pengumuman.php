<?php
    class Pengumuman extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Pengumuman_model'); //memanggil data model
        } 

        public function index (){
            
            // $this->load->database(); //koneksi ke database khusus method index
            $data['judul'] = 'Pengumuman'; //untuk judul tiap halaman biar enak
            $data['pengumuman'] = $this->Pengumuman_model->getAllPengumuman();
            $this->load->view('templates/header', $data);
            $this->load->view('home/pengumuman' , $data);
            $this->load->view('templates/footer');
        }

    }