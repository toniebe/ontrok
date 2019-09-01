<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Table extends CI_Controller {

 function __construct(){
   parent::__construct();
 }

 function index(){
   $this->load->model('m_table');
   $data['hasil'] = $this->m_table->get_table();
   $this->load->view('account/v_table',$data);
 }

 function gab(){
   $this->load->model('m_table');
   $data['hasil'] = $this->m_table->get_tableall();
   $this->load->view('account/v_table',$data);
 }

 function cari(){
   $this->load->model('m_table');
   if(isset($_GET ['search']) && !empty($_GET['search'])) {

        $search= $_GET[ 'search'];
        $this->load->model('m_table');

        if($this->m_table->search_table($search))
        {
           $this->load->view('account/v_table');

        }
        else
        {
            $this->session->set_flashdata('alert', 'gagal_login');
        }
    }
 }

}
