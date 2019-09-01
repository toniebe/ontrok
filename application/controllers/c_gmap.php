<?php
/**
*
*/
class c_gmap extends CI_Controller
{
 function __construct() //konstraktor untuk meload library, helper dan model
 {
  parent::__construct();
  //untuk meload library
  $this->load->library('googlemaps');
  $this->load->library('geocoder');
  //untuk meload model
  $this->load->model('m_gmap');
 }

      function index(){

        $this->load->view('v_gmap');

}

}
