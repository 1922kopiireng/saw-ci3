<?php 

    class Home extends CI_Controller{
      public function index (){

        $data['judul'] = 'Halaman Beranda'; //untuk judul tiap halaman biar enak
        $this->load->view('templates/header', $data);
        $this->load->view('home/home');
        $this->load->view('templates/footer');
      }      
    } 