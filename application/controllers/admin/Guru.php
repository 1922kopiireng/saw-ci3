<?php
class Guru extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_guru');
    }

    public function index ()
    {
        // $data['guru_penerimaan_siswa'] = $this ->Guru_model->
        //     tampil_data()->result();

        // $dataguru['guru'] = $this->Guru_model;
        
        $data['judul'] = 'Halaman Guru Penerimaan Siswa'; //untuk judul tiap halaman biar enak
        $data['gurupenerimaansiswa'] = $this->M_guru->getAllGurupenerimaansiswa();
        $this->load->view('template-ad/header', $data);
        $this->load->view('template-ad/sidebar');
        $this->load->view('admin/guru/guru', $data);
        $this->load->view('template-ad/footer');
    }
}

    // public function input ()
    // {
    //     $data = array(
    //         'nik'   => set_value('nik'),
    //         'nama_guru'   => set_value('nama_guru'),
    //         'jk_guru'   => set_value('jk_guru'),
    //         'alamat_guru'   => set_value('alamat_guru'),
    //         'no_telfon_guru'   => set_value('no_telfon_guru'),
    //     );
    //     $this->load->view('template-ad/header');
    //     $this->load->view('template-ad/sidebar');
    //     $this->load->view('admin/guru_form',$data);
    //     $this->load->view('template-ad/footer');
    // }

    // public function input_aksi()
    // {
    //     $this->rules();
    //     if($this->form_validation->run() == false)
    //     {
    //         $this->input();
    //     }else {
    //         $data = array (
    //             'nik' => this->input->post('nik',true),
    //             'nama_guru' => this->input->post('nama_guru',true),
    //             'jk_guru' => this->input->post('jk_guru',true),
    //             'alamat_guru' => this->input->post('alamat_guru',true),
    //             'no_telfon_guru' => this->input->post('no_telfon_guru',true),
    //         );

    //         $this->guru_model->input_data($data);
    //         $this->session->set_flashdata('data','<div class="alert 
    //             alert-danger alert-dismissible fade-show role="alert"">
    //                 Data Guru Berhasil Ditambahkan!
    //             <button type="button" class="close" data-dismiss="alert"
    //             aria-label="CLose"> <span aria-hidden="true">&times;
    //             </span></button>
    //             </div>');
    //         redirect('admin/guru');
    //     }
    // }

    // public function _rules()
    // {
    //     $this->form_validation->set_rules('nik','nik','required',[
    //         'required'  =>  'NIK wajib diisi!'
    //     ]);
    //     // pesan isi data inputan guru
            
    // }