<?php

class C_tampildata extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	function index(){
		$data['odp_treg3'] = $this->m_data->tampil_data()->result();
		$this->load->view('/account/v_tampildata',$data);
	}
}
