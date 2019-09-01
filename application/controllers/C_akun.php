<?php


class C_Akun extends CI_Controller
{
  public function index(){
        $this->load->view('account/v_login');
    }
  public function masuk(){
        $this->load->view('account/v_login');
    }
  public function daftar(){
        $this->load->view('account/v_register');
    }
  public function beranda(){
        $this->load->view('account/v_dashboard');
  }
  public function aplod(){
        $this->load->view('account/v_upload');
  }
  public function masukin(){
        $this->load->view('account/v_input');
  }

  public function daftarakun(){
    $this->form_validation->set_rules('name', 'NAME','required');
    $this->form_validation->set_rules('email','EMAIL','required|valid_email');
    $this->form_validation->set_rules('username', 'USERNAME','required');
    $this->form_validation->set_rules('password','PASSWORD','required');
    $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
    if($this->form_validation->run() == FALSE) {
        $this->load->view('account/v_register');
    }else{
        $data['nama']   =    $this->input->post('name');
        $data['email'] =    $this->input->post('email');
        $data['username']  =    $this->input->post('username');
        $data['password'] =    md5($this->input->post('password'));
        $data['password_conf'] = md5($this->input->post('password_conf'));

        $this->M_account->daftar($data);

        $pesan['message'] =   "Pendaftaran berhasil";

        $this->load->view('account/v_success',$pesan);

    $this->load->view('account/v_register');

}
  }



  // public function login(){
  //   $valid = $this->form_validation;
  //   $username = $this->input->post('username');
  //   $password = $this->input->post('password');
  //   $valid->set_rules('username','Username','required');
  //   $valid->set_rules('password','Password','required');
  //
  //   if($valid->run()) {
  //       $this->simple_login->login($username,$password, base_url('login'), base_url('login'));
  //       $this->load->view('account/v_dashboard');
  //   }
  //   // End fungsi login
  //   $this->load->view('account/v_login');
  // }

  public function cek_loginakun(){

        $data = $this->input->post(null,TRUE);
        $login= $this->M_account->loginakun($data);
        if($login){
            $sess_data = array(
                'logged_in' => "Sudah Login",
                'username' => $login->username
            );
            $this->session->set_userdata($sess_data);
            redirect('C_Akun/beranda');
        }else{
            $this->session->set_flashdata('alert', 'gagal_login');
            redirect('C_Akun/index');

        }
    }
}
