<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class C_ODP_INPUT extends CI_Controller {

     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_ODP'); //call model
     }

     public function index() {

         $data = $this->input->post(null,TRUE);
         $insert = $this->M_ODP->input_data($data);
         if($insert){
           $this->session->set_flashdata('alert','berhasil input');
           redirect('account/dashboard');
         }else{
           echo "<script>alert('gagal input bego');</script>";
         }
     }
}
?>
