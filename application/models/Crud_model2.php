<?php
class Crud_model2 extends CI_Model{

  function get_kategori(){
    $hsl=$this->db->get('eproposal');
    return $hsl;
  }
  function get_all_produk() {
        $this->datatables->select('eproposal.ODP_NAME,LATITUDE,LONGITUDE,KETERANGAN');
        $this->datatables->from('odp_treg3');
        $this->datatables->join('eproposal', 'odp_treg3.ODP_NAME=eproposal.ODP_NAME');
        $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-ODP_NAME="$1" data-LATITUDE="$2" data-LONGITUDE="$3" data-KETERANGAN="$4">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-ODP_NAME="$1">Hapus</a>','ODP_NAME,LATITUDE,LONGITUDE,KETERANGAN');
        return $this->datatables->generate();
  }

}
