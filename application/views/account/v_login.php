<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script type="text/javascript" src="jquery.js"></script>
  <title>
    Login Member | TREG
  </title>
  <?php $this->load->view('account/cssregist') ?>
  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
</head>
<body>
    <?php
 // Cetak jika ada notifikasi
    if($this->session->flashdata('sukses')) {
         echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
    }else if ($this->session->flashdata('alert')=='gagal_login'){
    		echo "<script>alert('Username / Password Salah!');</script>";
		}
    ?>
  <div class="konten animated bounceInLeft">
      <div class="kepala" style="height:180px;">
          <div class="lock" ></div>
          <h2 class="logo" style="margin-top:-100px; margin-left:18px;"><img src="<?php echo base_url(); ?>assets/images/logo_tirex.png"></h2>
      </div>

      <?php echo form_open('login');?>

      <div class="artikel">
          <form method="post">
              <p style="font-weight:bold; color:#000000; margin-left:70px;">Login - ONTROK v1.0 </p>
              <div class="grup">
                  <label for="username"></label>
                  <input type="username" name="username" placeholder="Username">
              </div>
              <div class="grup">
                  <label for="password"></label>
                  <input type="password" class="form-password" id=pass name="password" placeholder="Password">
              </div>


              <div class="grup">
                  <button class="btn btn-primary" name="login" style="background: #33cd77; border: 1px solid #33cd77; width: 100%;" id="btnlogin">LOGIN</button>
              </div>

              <?php echo form_close();?>

              <hr>
              <div>
                <h7 style="color:#000000;">Don't have an account?</h7>
                <h6><a href="<?php echo site_url('register')?>">REGISTER</h6></a>
              </div>
          </form>
      </div>
  </div>
</body>
</html>
