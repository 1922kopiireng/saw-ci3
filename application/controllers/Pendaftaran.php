<?php
class Pendaftaran extends CI_Controller
{
    public function index()
    {
        $this->load->database(); //koneksi ke database khusus method index
        $data['judul'] = 'Pendaftaran'; //untuk judul tiap halaman biar enak
        $this->load->view('templates/header', $data);
        $this->load->view('home/pendaftaran');
        $this->load->view('templates/footer');
    }
}
