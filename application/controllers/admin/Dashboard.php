<?php

class Dashboard extends CI_Controller{
    public function index (){
        $data['judul'] = 'Dashboard'; //untuk judul tiap halaman biar enak
        $this->load->view('template-ad/header', $data);
        $this->load->view('template-ad/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('template-ad/footer');
        
    }
}