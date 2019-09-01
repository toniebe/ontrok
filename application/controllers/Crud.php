<?php
class Crud extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('crud_model');
  }
  function index(){
    $x['eproposal']=$this->crud_model->get_kategori();
    $this->load->view('crud_view',$x);
  }

  function get_guest_json() { //data data produk by JSON object
    header('Content-Type: application/json');
    echo $this->crud_model->get_all_produk();
  }

  function simpan(){ //function simpan data
    $data=array(
      'ODP_NAME'     => $this->input->post('ODP_NAME'),
      'LATITUDE'     => $this->input->post('LATITUDE'),
      'LONGITUDE'    => $this->input->post('LONGITUDE'),
      'KETERANGAN' => $this->input->post('KETERANGAN')
    );
    $this->db->insert('eproposal', $data);
    redirect('crud');
  }

  function update(){ //function update data
    $kode=$this->input->post('ODP_NAME');
    $data=array(
      'LATITUDE'     => $this->input->post('LATITUDE'),
      'LONGITUDE'    => $this->input->post('LONGITUDE'),
      'KETERANGAN' => $this->input->post('KETERANGAN')
    );
    $this->db->where('ODP_NAME',$kode);
    $this->db->update('eproposal', $data);
    redirect('crud');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('ODP_NAME');
    $this->db->where('ODP_NAME',$kode);
    $this->db->delete('eproposal');
    redirect('crud');
  }

}
