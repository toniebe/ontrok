<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class M_ODP extends CI_Model{

      function input_data($data)
      {
        $param = array(
          "NOSS_ID"=>$data['NOSS_ID'],
          "ODP_INDEX"=>$data['ODP_INDEX'],
          "ODP_NAME"=>$data['ODP_NAME'],
          "LATITUDE"=>$data['LATITUDE'],
          "LONGITUDE"=>$data['LONGITUDE'],
          "CLUSNAME"=>$data['CLUSNAME'],
          "CLUSTERSTATUS"=>$data['CLUSTERSTATUS'],
          "AVAI"=>$data['AVAI'],
          "USED"=>$data['USED'],
          "RSV"=>$data['RSV'],
          "RSK"=>$data['RSK'],
          "IS_TOTAL"=>$data['IS_TOTAL'],
          "WITEL"=>$data['WITEL'],
          "DATEL"=>$data['DATEL'],
          "STO"=>$data['STO'],
          "STO_DESC"=>$data['STO_DESC'],
          "ODP_INFO"=>$data['ODP_INFO'],
          "UPDATE_DATE"=>$data['UPDATE_DATE'],
          "KETERANGAN"=>$data['KETERANGAN']
        );

          $insert = $this->db->insert('odp_treg3',$param);;
      if ($insert){
          return TRUE;
      }else{
          return FALSE;
      }
      }

      public function selectdata($data)
      {
      $query = $this->db->get("odp_treg3");
      return $query;
      }

      function buat($data)
      {
        $param = array(
          "NEWCO"=>$data['NEWCO'],
          "DoCC"=>$data['DoCC'],
          "Witel"=>$data['Witel'],
          "Paket"=>$data['slct1'],
          "WBS"=>$data['slct2'],
          "RefDocument"=>$data['RefDocument'],
          "Item"=>$data['Item'],
          "CostElement"=>$data['CostElement'],
          "Name"=>$data['Name'],
          "vendor"=>$data['vendor'],
          "username"=>$data['username'],
          "Document_Date"=>$data['Document_Date'],
          "Value_Trancurr"=>$data['Value_Trancurr'],
          "Debit_Date"=>$data['Debit_Date'],
          "Ket"=>$data['Ket'],
          "Ven_Name"=>$data['Ven_Name'],
          "Ven_Name2"=>$data['ODP']
        );

          $insert = $this->db->insert('lop',$param);;
      if ($insert){
          return TRUE;
      }else{
          return FALSE;
      }
      }

      }
