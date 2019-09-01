<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <title>Import & Export PHPExcel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    ul li a:hover{
      background:gray;
    }
   * {
    box-sizing: border-box;
   }

   input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
   }

   label {
    padding: 12px 12px 12px 0;
    display: inline-block;
   font-size:18px;
   }

   input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
   }

   input[type=submit]:hover {
    background-color: #45a049;
   }



   .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
   }

   .col-75 {
    float: left;
    width: 65%;
    margin-top: 6px;
   }

   /* Clear floats after the columns */
   .row:after {
    content: "";
    display: table;
    clear: both;
   }

   /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
   @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
   }
   .box {
     width: 40%;
     margin: 0 auto;
     background: rgba(255,255,255,0.2);
     padding: 35px;
     border: 2px solid #fff;
     border-radius: 20px/50px;
     background-clip: padding-box;
     text-align: center;
   }

   .button {
     font-size: 1em;
     padding: 10px;
     color: #fff;
     border: 2px solid #06D85F;
     border-radius: 20px/50px;
     text-decoration: none;
     cursor: pointer;
     transition: all 0.3s ease-out;
   }
   .button:hover {
     background: #06D85F;
   }

   .overlay {
     position: fixed;
     top: 0;
     bottom: 0;
     left: 0;
     right: 0;
     background: rgba(0, 0, 0, 0.7);
     transition: opacity 500ms;
     visibility: hidden;
     opacity: 0;
   }
   .overlay:target {
     visibility: visible;
     opacity: 1;
   }

   /* pop up */
   .popup {
     margin: 70px auto;
     padding: 20px;
     background: #fff;
     border-radius: 5px;
     width: 30%;
     position: relative;
     transition: all 5s ease-in-out;
     margin-top:260px;
   }

   .popup h2 {
     margin-top: 0;
     color: #333;
     font-family: Tahoma, Arial, sans-serif;
   }
   .popup .close {
     position: absolute;
     top: 20px;
     right: 30px;
     transition: all 200ms;
     font-size: 30px;
     font-weight: bold;
     text-decoration: none;
     color: #333;
   }
   .popup .close:hover {
     color: #06D85F;
   }
   .popup .content {
     max-height: 30%;
     overflow: auto;
   }

   @media screen and (max-width: 700px){
     .box{
     width: 70%;
     }
     .popup{
     width: 70%;
     }
   }
   /* pop up end */

         /* The Modal (background) */
         .modal {
             display: none; /* Hidden by default */
             position: fixed; /* Stay in place */
             z-index: 1; /* Sit on top */
             padding-top: 300px; /* Location of the box */
             left: 0;
             top: 0;
             width: 100%; /* Full width */
             height: 100%; /* Full height */
             overflow: auto; /* Enable scroll if needed */
             background-color: rgb(0,0,0); /* Fallback color */
             background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
         }

         /* Modal Content */
         .modal-content {
             background-color: #fefefe;
             margin: auto;
             padding: 20px;
             border: 1px solid #888;
             width: 30%;
         }

         /* The Close Button */
         .close {
             color: #000;
             float: right;
             font-size: 28px;
             font-weight: bold;
         }

         .close:hover,
         .close:focus {
             color: #000;
             text-decoration: none;
             cursor: pointer;
         }
   </style>

  </head>
  <body>
    <?php $this->load->view('account/navbar') ?>
    <div class="container">
        <h1>Import dan Export Data</h1>
        <div class="row">
          <div class="col" style="margin-top: 20px;">
            <div class="alert alert-info" animated bounceInLeft align="center" style="font-weight: bold;" ><img src="<?php echo base_url(); ?>assets/images/alert.png" width="22" height="22" class="d-inline-block align-top" alt="" > BACA PANDUAN TERLEBIH DAHULU SEBELUM UPLOAD!</div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center" style="background: #f1f1f1; padding: 20px;">Import Xls/Xlsx ke database</div>
                    <div class="panel-body">
                        <?php
                        $att=array(
                        'class'=>'form-horizontal',
                        'id'=>'formimport',
                        );
                        echo form_open_multipart("",$att);
                        ?>
                        <div class="form-group">
                            <label for="x" class="col-sm-3 control-label" style="font-weight: bold; ">Tabel</label>
                            <!-- <div class="col-sm-8"> -->
                              <select name="tb1" id="tb1" class="form-control" required="">
                                  <option value="">-Pilih Tabel</option>
                                  <?php
                                  $t1 = $this->db->list_tables();
                                  foreach($t1 as $rf1)
                                  {
                                      ?>
                                      <option value="<?=$rf1;?>"><?=ucwords($rf1);?></option>
                                      <?php
                                  }
                                  ?>
                              </select>
                            <!-- </div> -->
                        </div>
                        <div class="form-group">
                            <label for="x" class="col" style="font-weight: bold;">
                            Pilih File (xls/xlsx)</label>
                            <!-- <div class="col-sm-8"> -->
                              <input type="file" class="form-control" id="file" name="file" required="" placeholder="Pilih File" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                            <!-- </div> -->
                        </div>
                        <div class="form-group">
                                      <div class="col" style="padding: 10px; font-weight: bold; background:#d1ecf1;" align="center">
                                         Panduan
                                      </div>
                                      <div class="col" style="padding: 10px; background: #f1f1f1;">
                                         1. Buat tabel baru.
                                      </div>
                                      <div class="col" style="padding: 10px;">
                                        2. Kolom harus sesuai dengan nama field.
                                      </div>
                                      <div class="col" style="padding: 10px; background: #f1f1f1;">
                                        3. Baris data adalah letak data pada file.
                                      </div>
                        </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="x" class="col-sm-3 control-label"></label>
                            <!-- <div class="col-sm-8"> -->
                              <button type="submit" id="importbtn" class="btn btn-flat btn-md btn-primary">Import Data</button>
                              <button type="reset" id="resetbtn" class="btn btn-flat btn-md btn-default">Reset Form</button>
                            <!-- </div> -->
                        </div>
                        <div id="respon1"></div>
                        <?php
                        echo form_close();
                        ?>
                    </div>
                </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center" style="background: #f1f1f1; padding: 20px;">Export Table ke Xlsx</div>
                    <div class="panel-body">
                    <?php
                        $att=array(
                        'class'=>'form-horizontal',
                        'id'=>'formexport',
                        );
                        echo form_open("",$att);
                        ?>
                        <div class="form-group">
                            <label for="x" class="col-sm-3 control-label">Tabel</label>
                            <!-- <div class="col-sm-8"> -->
                              <select name="tb1" id="tb1" class="form-control" required="">
                                  <option value="">-Pilih Tabel</option>
                                  <?php
                                  foreach($t1 as $rf1)
                                  {
                                      ?>
                                      <option value="<?=$rf1;?>"><?=ucwords($rf1);?></option>
                                      <?php
                                  }
                                  ?>
                              </select>
                            <!-- </div> -->
                        </div>
                        <div class="form-group">
                            <label for="x" class="col-sm-3 control-label" style="font-weight: bold;">Judul</label>
                            <!-- <div class="col-sm-8"> -->
                              <input type="text" class="form-control" id="title" name="title" required="">
                            <!-- </div> -->
                        </div>
                        <div class="form-group">
                            <label for="x" class="col-sm-3 control-label" style="font-weight: bold;">Keterangan</label>
                            <!-- <div class="col-sm-8"> -->
                              <textarea class="form-control" id="description" name="description" required="" placeholder="Masukkan deskripsi dokumen"></textarea>
                            <!-- </div> -->
                        </div>
                        <div class="form-group" align="center">
                            <label for="x" class="col-sm-3 control-label" style="font-weight: bold;"></label>
                            <div class="col-sm-8">
                              <button type="submit" id="exportbtn" class="btn btn-flat btn-md btn-primary">Import Data</button>
                            </div>
                        </div>
                        <div id="respon2"></div>
                        <?php
                        echo form_close();
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row" align="center">
          <div class="col" style="background: #ffffff; padding: 50px;">
          </div>
        </div>
        <footer align="center" style="background: #f1f1f1; padding:15px;">
       Copyright &copy; 2018 - PT Telkom Indonesia
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
      function showelement(id,container)
      {
        var did=$("#"+container).attr('data-id');
        if(did==0)
        {
            $("#"+id).show();
            $("#"+container).attr('data-id','1');
        }else if(did==1){
            $("#"+id).hide();
            $("#"+container).attr('data-id','0');
        }
      }
      $(document).ready(function(){

        $("#formimport").on('submit',function(e){
            e.preventDefault();
            var tb=$("#tb1").val();
            var fl=$("#file").val();
            var br=$("#mulai").val();
            $.ajax({
                type:'post',
                dataType:'json',
                url:'<?=site_url();?>/welcome/importdata',
                data:  new FormData(this),
                mimeType:"multipart/form-data",
                contentType: false,
                cache: false,
                processData:false,
                beforeSend:function(){
                    $("#respon1").html('<img src="<?=base_url();?>ajax-loader.gif"/><span>harap tunggu...</span>');
                },
                success:function(x){
                    $("#respon1").html(x);
                    $("#resetbtn").trigger('click');
                    return false;
                },
            });
        });

        $("#formexport").on('submit',function(e){
            e.preventDefault();
            $.ajax({
                type:'post',
                dataType:'json',
                url:'<?=site_url();?>/welcome/exportdata',
                data:$(this).serialize(),
                beforeSend:function(){
                    $("#respon2").html('<img src="<?=base_url();?>ajax-loader.gif"/><span>harap tunggu...</span>');
                },
                success:function(x){
                    $("#respon2").html(x);
                    return false;
                },
            });
        });

      });
  </script>
  </body>
</html>
