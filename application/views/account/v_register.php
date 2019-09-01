
 <!DOCTYPE html>
 <html>
 <head>
   <title>Member Register | TREG</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
   <?php $this->load->view('account/cssregist') ?>
   <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
 </head>
 <body>
   <body>
   <div class="konten">
       <div class="kepala" style="height:180px;">
           <div class="lock" ></div>
           <h2 class="logo" style="margin-top:-100px; margin-left:18px;"><img src="<?php echo base_url(); ?>assets/images/logo_tirex.png"></h2>
       </div>

       <?php echo form_open('register');?>

       <div class="artikel animated bounceInLeft">
           <form method="post">
               <p style="font-weight:bold; color:#000000; margin-left:70px;">Register - ONTROK v1.0 </p>
               <div class="grup">
                   <label for="name"></label>
                   <input type="username" name="name" placeholder="Name">
               </div>
               <div class="grup">
                   <label for="email"></label>
                   <input type="username" name="email" placeholder="Email">
               </div>
               <div class="grup">
                   <label for="username"></label>
                   <input type="username" name="username" placeholder="Username">
               </div>
               <div class="grup">
                   <label for="password"></label>
                   <input type="password" name="password" placeholder="Password">
               </div>
               <div class="grup">
                   <label for="password_conf"></label>
                   <input type="password" id=pass name="password_conf" placeholder="Password Confirm">

               </div>
               <!-- <div class="chexbox">
                 <input type="checkbox" name="chek" > Remember me <br/>
               </div> -->

               <div class="grup">
                   <button class="btn btn-primary" name="login" style="background: #33cd77; border: 1px solid #33cd77; width: 100%;" id="btnlogin">REGISTER</button>
               </div>

               <!-- <?php echo form_close();?> -->

               <hr>
               <div>
                 <h6><a href="<?php echo site_url('C_Akun/index')?>">Back To Sign In</h6></a>
               </div>

       </div>
   </div>
   </body>
 </html>
