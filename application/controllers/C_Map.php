<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Map extends CI_Controller {

 function __construct(){
   parent::__construct();
 }

 function index(){
   $this->load->library('googlemaps');
   $this->load->model('map_model', '', TRUE);

   $config['center'] = 'Jawa Barat';
   $config['zoom'] = "10";

   $this->googlemaps->initialize($config);
   $coords = $this->map_model->get_coordinates();

   foreach ($coords as $coordinate) {
     $marker = array();
     if($coordinate->KETERANGAN == 'hijau'){
       $marker['position'] = $coordinate->LATITUDE.','.$coordinate->LONGITUDE;
       $marker['icon'] = 'http://labs.google.com/ridefinder/images/mm_20_green.png';
       $marker['title'] = $coordinate->ODP_NAME;
     }elseif ($coordinate->KETERANGAN == 'kuning') {
       $marker['position'] = $coordinate->LATITUDE.','.$coordinate->LONGITUDE;
       $marker['icon'] = 'http://labs.google.com/ridefinder/images/mm_20_yellow.png';
       $marker['title'] = $coordinate->ODP_NAME;
     }elseif ($coordinate->KETERANGAN == 'merah') {
       $marker = array();
       $marker['position'] = $coordinate->LATITUDE.','.$coordinate->LONGITUDE;
       $marker['icon'] = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
       $marker['title'] = $coordinate->ODP_NAME;
     }elseif ($coordinate->KETERANGAN == 'hitam'){
       $marker['position'] = $coordinate->LATITUDE.','.$coordinate->LONGITUDE;
       $marker['icon'] = 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_black.png';
       $marker['title'] = $coordinate->ODP_NAME;
     }

 $this->googlemaps->add_marker($marker);
  }


 $data = array();
 $data['map'] = $this->googlemaps->create_map();
 $this->load->view('account/v_maps', $data);
 }

 function all(){
   $this->load->library('googlemaps');
   $this->load->model('map_model', '', TRUE);

   $config['center'] = 'Jawa Barat';
   $config['zoom'] = "10";

   $this->googlemaps->initialize($config);
   $coords = $this->map_model->get_all();

   foreach ($coords as $coordinate) {
     $marker = array();
     if($coordinate->KETERANGAN == 'hijau'){
       $marker['position'] = $coordinate->LATITUDE.','.$coordinate->LONGITUDE;
       $marker['icon'] = 'http://labs.google.com/ridefinder/images/mm_20_green.png';
       $marker['title'] = $coordinate->ODP_NAME;
     }elseif ($coordinate->KETERANGAN == 'kuning') {
       $marker['position'] = $coordinate->LATITUDE.','.$coordinate->LONGITUDE;
       $marker['icon'] = 'http://labs.google.com/ridefinder/images/mm_20_yellow.png';
       $marker['title'] = $coordinate->ODP_NAME;
     }elseif ($coordinate->KETERANGAN == 'merah') {
       $marker = array();
       $marker['position'] = $coordinate->LATITUDE.','.$coordinate->LONGITUDE;
       $marker['icon'] = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
       $marker['title'] = $coordinate->ODP_NAME;
     }elseif ($coordinate->KETERANGAN == 'hitam'){
       $marker['position'] = $coordinate->LATITUDE.','.$coordinate->LONGITUDE;
       $marker['icon'] = 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_black.png';
       $marker['title'] = $coordinate->ODP_NAME;
     }

 $this->googlemaps->add_marker($marker);
  }


 $data = array();
 $data['map'] = $this->googlemaps->create_map();
 $this->load->view('account/v_maps', $data);
 }

 // function ambil_data(){
 //   $all = $this->input->post('ALL');
 //   $exist = $this->input->post('EXISTING');
 //
 // }

}
