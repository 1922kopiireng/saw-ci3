<?php
    class Calonsiswa extends CI_Controller{
        // public function __construct()
        // {
        //     parent::__construct();
        //     $this->load->model('Calonsiswa_model');
        // }
        public function index (){
            
            $data['judul'] = 'Halaman Calon Siswa'; //untuk judul tiap halaman biar enak
            // $data['calonsiswa'] = $this->Calonsiswa_model->getAllCalonsiswa();
            $data['calonsiswa'] = $this->M_calonsiswa->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/calonsiswa/calonsiswa', $data);
            $this->load->view('template-ad/footer');
        }

        // hanya menampilkan semua isi dari inputan halaman tertentu
        public function tambah_data(){
            // data[judul] untuk mengisi nama otomatis di bagian atasa setiap halaman
            $data['judul'] = 'Halaman Tambah Data'; //untuk judul tiap halaman biar enak
            // $data['calonsiswa'] = $this->Calonsiswa_model->getAllCalonsiswa();
            $data['calonsiswa'] = $this->M_calonsiswa->SemuaData();
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/calonsiswa/tambah_data', $data);
            $this->load->view('template-ad/footer');
        }

        // memprose data yg sudah disi ke database pada tombol
        public function proses_tambah_data(){
            $this->M_calonsiswa->proses_tambah_data();
            redirect('admin/calonsiswa');  //untuk langsug ke halaman sebelumnya
        }

        // tombol hapus data
        public function hapus_data ($nisn){
            $this->M_calonsiswa->hapus_data($nisn);
            redirect('admin/calonsiswa');
        }

        //mengambil data pada halaman calon siswa untuk diedit
        public function edit_data($nisn){
            $data['judul'] = 'Halaman Edit Data';
            $data['calonsiswa'] = $this->M_calonsiswa->ambil_nisn($nisn); //data diambil di halaman edit data
            $this->load->view('template-ad/header', $data);
            $this->load->view('template-ad/sidebar');
            $this->load->view('admin/calonsiswa/edit_data');
            $this->load->view('template-ad/footer');
        }

        //memanggil model dan mengirimkan
        public function proses_edit_data($nisn){
            $this->M_calonsiswa->proses_edit_data($nisn);
            redirect('admin/calonsiswa');
        }

        
    }

    