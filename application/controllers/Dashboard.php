<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->model('M_ODP');
    }

    //Load Halaman dashboard

    public function index(){
      $this->load->view('account/v_dashboard');

    }
    public function create() {



                $data = $this->input->post(null,TRUE);
                $insert = $this->M_ODP->input_data($data);
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


    // public function input() {
    //
    //     $data = $this->input->post(null,TRUE);
    //     $insert = $this->M_ODP->input_data($data);
    //     if($insert){
    //       $this->session->set_flashdata('alert','berhasil input');
    //       redirect('account/dashboard');
    //     }else{
    //       echo "<script>alert('gagal input bego');</script>";
    //     }
    // }
