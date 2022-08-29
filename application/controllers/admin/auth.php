<?php

class Auth extends CI_Controller{
    public function index (){
        $this->load->view('template/header');
        $this->load->view('admin/login');
        $this->load->view('template/footer');
    }

    public function proses_login (){
        $this->form_validation->set_rules('username','username','
        required');
        $this->form_validation->set_rules('password','password','
        required');
        if ($this->form_validation->run() == false){
            $this->load->view('template-ad/header');
            $this->load->view('admin/login');
            $this->load->view('template-ad/footer');
        }else {
            $username   = $this->input->post('username');
            $passowrd   = $this->input->post('password');

            $user = $username;
            $pass = md5($passowrd);

            $cek = $this->login_model->cek_login($user,$pass);

            if ($cek->num_rows() > 0){

                foreach($cek->result() as $ck){
                    $sess_data['username'] = $ck->username;
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;

                    $this->session->set_userdata($sess_data);
                }
                 if($sess_data['level'] == 'admin'){
                    redirect('admin/dashboard');
                 }else {
                    $this->session->set_flashdata('peesan',
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('admin/auth');
                 }
            }else{
                $this->session->set_flashdata('peesan',
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    redirect('admin/auth');
            }
        }
    }
}