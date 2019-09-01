<?php


class Map_model extends CI_Model {
 function __construct()
 {
 parent::__construct();
 }

 function get_coordinates()
 {
 $return = array();
 $this->db->select("odp_treg3.ODP_NAME,odp_treg3.LATITUDE,odp_treg3.LONGITUDE,odp_treg3.KETERANGAN");
 $this->db->from("odp_treg3");
 $this->db->join("eproposal" , "odp_treg3.ODP_NAME = eproposal.ODP_NAME");
 $query = $this->db->get();
 if ($query->num_rows()>0) {
 foreach ($query->result() as $row) {
 array_push($return, $row);
 }
 }
 return $return;
 }

 function get_all()
 {
  $return = array();
  $this->db->select("ODP_NAME,LATITUDE,LONGITUDE,KETERANGAN");
  $this->db->from("odp_treg3");
  $query = $this->db->get();
  if ($query->num_rows()>0){
    foreach ($query->result() as $row) {
      array_push($return,$row);
    }
  }
  return $return;
 }



}
