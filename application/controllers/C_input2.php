<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_input2 extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('M_ODP');
    }



    public function index(){
      $this->load->view('account/v_input2');

    }

    public function inputvendor() {



                $data = $this->input->post(null,TRUE);
                $insert = $this->M_ODP->buat($data);
                if($insert){
                    $this->session->set_flashdata('alert', 'sukses_daftar');
                    //isi dengan flash data disini
                    redirect('Dashboard/index');
                }else{
                    echo "<script>alert('Gagal Daftar');</script>";
                    //echo javascript alert disini untuk penanda kalo gagal
                }

      }

}
