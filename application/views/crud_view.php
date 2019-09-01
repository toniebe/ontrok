<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo-tangan1.png">
	<title>ALL DATA ODP | Treg3</title>
  <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url().'assets/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.css'?>" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<?php $this->load->view('account/navbar') ?>
	<br>
	<br>
	<br>
	<br>
	<br>
  <div class="container">
		<h2 align="center">ALL DATA ODP</h2>
		<button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
    <table class="table table-striped" id="mytable">
      <thead>
        <tr>
          <th>ODP_NAME</th>
          <th>LATITUDE</th>
          <th>LONGITUDE</th>
          <th>KETERANGAN</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>

	<!-- Modal Add Produk-->
	  <form id="add-row-form" action="<?php echo base_url().'index.php/crud/simpan'?>" method="post">
	     <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        <div class="modal-dialog">
	           <div class="modal-content">
	               <div class="modal-header">
	                   <h4 class="modal-title" id="myModalLabel">Add New</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	               </div>
	               <div class="modal-body">
	                   <div class="form-group">
	                       <input type="text" name="ODP_NAME" class="form-control" placeholder="ODP_NAME" required>
	                   </div>
										 <div class="form-group">
	                       <input type="text" name="LATITUDE" class="form-control" placeholder="LATITUDE" required>
	                   </div>
										 <div class="form-group">
	                       <input type="text" name="LONGITUDE" class="form-control" placeholder="LONGITUDE" required>
	                   </div>

										 <div class="form-group">
	                       <input type="text" name="KETERANGAN" class="form-control" placeholder="KETERANGAN" required>
	                   </div>

	               </div>
	               <div class="modal-footer">
	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                  	<button type="submit" id="add-row" class="btn btn-success">Save</button>
	               </div>
	      			</div>
	        </div>
	     </div>
	 </form>

	 <!-- Modal Update Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'index.php/crud/update'?>" method="post">
 	     <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">
 	                   <h4 class="modal-title" id="myModalLabel">Update Data ODP</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	               </div>
 	               <div class="modal-body">
 	                   <div class="form-group">
 	                       <input type="text" name="ODP_NAME" class="form-control" placeholder="ODP NAME" required>
 	                   </div>
 										 <div class="form-group">
 	                       <input type="text" name="LATITUDE" class="form-control" placeholder="LATITUDE" required>
 	                   </div>
										 <div class="form-group">
 	                       <input type="text" name="LONGITUDE" class="form-control" placeholder="LONGITUDE" required>
 	                   </div>

 										 <div class="form-group">
 	                       <input type="text" name="KETERANGAN" class="form-control" placeholder="KETERANGAN" required>
 	                   </div>

 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 	                  	<button type="submit" id="add-row" class="btn btn-success">Update</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>

	 <!-- Modal Hapus Produk-->
 	  <form id="add-row-form" action="<?php echo base_url().'index.php/crud/delete'?>" method="post">
 	     <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	        <div class="modal-dialog">
 	           <div class="modal-content">
 	               <div class="modal-header">

 	                   <h4 class="modal-title" id="myModalLabel">Hapus Data ODP</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 	               </div>
 	               <div class="modal-body">
 	                       <input type="hidden" name="ODP_NAME" class="form-control" placeholder="ODP_NAME" required>
												 <strong>Anda yakin mau menghapus record ini?</strong>
 	               </div>
 	               <div class="modal-footer">
 	                   	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 	                  	<button type="submit" id="add-row" class="btn btn-success">Hapus</button>
 	               </div>
 	      			</div>
 	        </div>
 	     </div>
 	 </form>

	 <script src="<?php echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script>
	 <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	 <script src="<?php echo base_url().'assets/js/jquery.datatables.min.js'?>"></script>
	 <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>"></script>

<script>
	$(document).ready(function(){
		// Setup datatables
		$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      };

      var table = $("#mytable").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "loading..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'index.php/crud/get_guest_json'?>", "type": "POST"},
                	columns: [
												{"data": "ODP_NAME"},
												{"data": "LATITUDE"},
												{"data": "LONGITUDE"},
												//render harga dengan format angka
                        // {"data": "barang_harga", render: $.fn.dataTable.render.number(',', '.', '')},
                        {"data": "KETERANGAN"},
                        {"data": "view"}
                  ],
          		order: [[1, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
          }

      });
			// end setup datatables
			// get Edit Records
			$('#mytable').on('click','.edit_record',function(){
            var nama_odp=$(this).data('ODP_NAME');
						var lat=$(this).data('LATITUDE');
						var long=$(this).data('LONGITUDE');
						var ket=$(this).data('KETERANGAN');
            $('#ModalUpdate').modal('show');
            $('[name="ODP_NAME"]').val(nama_odp);
						$('[name="LATITUDE"]').val(lat);
						$('[name="LONGITUDE"]').val(long);
						$('[name="KETERANGAN"]').val(ket);
      });
			// End Edit Records
			// get Hapus Records
			$('#mytable').on('click','.hapus_record',function(){
            var nama_odp=$(this).data('ODP_NAME');
            $('#ModalHapus').modal('show');
            $('[name="ODP_NAME"]').val(nama_odp);
      });
			// End Hapus Records

	});
</script>
<footer align="center" style="background: #f1f1f1; padding:15px;">
	Copyright &copy; 2018 - PT Telkom Indonesia
</footer>
</body>
</html>
