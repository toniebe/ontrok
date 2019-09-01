<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html>
 <head>
   <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo-tangan1.png">
   <meta charset="UTF-8">
   <title> Dashboard | TREG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
    <style>
		ul li a:hover{
			background:gray;
		}
		body {
		  height: 100vh;
		}

		h1 {
		  text-align: center;
		  font-family: Tahoma, Arial, sans-serif;
		  color: #06D85F;
		  margin: 80px 0;
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

    /* socmed */
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

      		  .icon-button {
      	background-color: white;
      	border-radius: 3.6rem;
      	cursor: pointer;
      	display: inline-block;
      	font-size: 2.0rem;
      	height: 3.6rem;
      	line-height: 3.6rem;
      	margin: 0 5px;
      	position: relative;
      	text-align: center;
      	-webkit-user-select: none;
      	   -moz-user-select: none;
      	    -ms-user-select: none;
      	        user-select: none;
      	width: 3.6rem;
      }

      /* Circle */
      .icon-button span {
      	border-radius: 0;
      	display: block;
      	height: 0;
      	left: 50%;
      	margin: 0;
      	position: absolute;
      	top: 50%;
      	-webkit-transition: all 0.3s;
      	   -moz-transition: all 0.3s;
      	     -o-transition: all 0.3s;
      	        transition: all 0.3s;
      	width: 0;
      }
      .icon-button:hover span {
      	width: 3.6rem;
      	height: 3.6rem;
      	border-radius: 3.6rem;
      	margin: -1.8rem;
      }
      .twitter span {
      	background-color: #4099ff;
      }
      .facebook span {
      	background-color: #3B5998;
      }
      .google-plus span {
      	background-color: #db5a3c;
      }

      /* Icons */
      .icon-button i {
      	background: none;
      	color: white;
      	height: 3.6rem;
      	left: 0;
      	line-height: 3.6rem;
      	position: absolute;
      	top: 0;
      	-webkit-transition: all 0.3s;
      	   -moz-transition: all 0.3s;
      	     -o-transition: all 0.3s;
      	        transition: all 0.3s;
      	width: 3.6rem;
      	z-index: 10;
      }
      .icon-button .icon-twitter {
      	color: #4099ff;
      }
      .icon-button .icon-facebook {
      	color: #3B5998;
      }
      .icon-button .icon-google-plus {
      	color: #db5a3c;
      }
      .icon-button:hover .icon-twitter,
      .icon-button:hover .icon-facebook,
      .icon-button:hover .icon-google-plus {
      	color: white;
      }
      /* socmed end */
	</style>
 </head>
 <body>
   <?php $this->load->view('account/navbar') ?>
     <hr>
       <div class="row">
         <div class="col" style="background:white;padding:30px;">
         </div>
       </div>
       <div class="row" align="center">
         <div class="col" style="background:white; font-family:arial; padding:20px; font-size:30px;">
           <marquee scrollamount="10" direction="left">Selamat Datang <?php echo ucfirst($this->session->userdata('username')); ?> !</marquee>
         </div>
       </div>
       <div class="row">
         <div class="col" style="background:white; padding:10px;">
         </div>
       </div>
       <hr>
       <div class="row">
         <div class="col">
           <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
           <ol class="carousel-indicators">
             <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
             <li data-target="#carouselExampleControls" data-slide-to="1"></li>
           </ol>
           <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="<?php echo base_url(); ?>assets/images/c1.jpg" alt="First Slide" height="300px" class="d-block w-100">
             </div>
             <div class="carousel-item">
               <img src="<?php echo base_url(); ?>assets/images/c2.jpg" alt="Second Slide" height="300px" class="d-block w-100">
             </div>
           </div>
           <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
           </a>
           </div>
         </div>
       </div>
       <hr>
       <div class="row four-box-pan" role="four-box">
                               <section class="col-xs-12 col-sm-6 col-md-3" align="center">
                               <figure><img src="<?php echo base_url(); ?>assets/images/tetew.png" width="200" height="200"></figure>
                               </section>
                 <section class="col-xs-12 col-sm-6 col-md-3" align="center">
                   <figure><img src="<?php echo base_url(); ?>assets/images/integrity.png"></figure>
                   <h5>Integrity</h5>
                                   <p style="font-style:italic;">Integritas</p>
                   <p style="font-style:italic;">Perilaku Positif</p>
                   <p style="font-style:italic;">Kejujuran</p>
                 </section>
                               <section class="col-xs-12 col-sm-6 col-md-3" align="center">
                                 <figure><img src="<?php echo base_url(); ?>assets/images/antusias.png"></figure>
                                 <h5>Entusiashm</h5>
                                   <p style="font-style:italic;">Antusiasme</p>
                   <p style="font-style:italic;">Kesungguhan</p>
                   <p style="font-style:italic;">Keinginan untuk menjadi yang terbaik</p>
                               </section>
                               <section class="col-xs-12 col-sm-6 col-md-3" align="center">
                                 <figure><img src="<?php echo base_url(); ?>assets/images/totalitas.png"></i></figure>
                                 <h5>Totality</h5>
                                   <p style="font-style:italic;">Totalitas</p>
                   <p style="font-style:italic;">Pengembangan Diri</p>
                   <p style="font-style:italic;">Berkomitmen dalam Tugas</p>
                               </section>
       </div>
       <hr>
       <br>
       <div class="row" align="center">
         <div class="col">
         <div class="embed-responsive embed-responsive-21by9">
           <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SQgXtyVvDyI"></iframe>
         </div>
         </div>
         <div class="embed-responsive embed-responsive-21by9">
           <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NK034D5ovf0"></iframe>
         </div>
         <div class="embed-responsive embed-responsive-21by9">
           <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/US2xHP74jqc"></iframe>
         </div>
       </div>
       <hr>
       <div class="row" align="center">
         <div class="col" style="background:white;padding:10px; font-weight:bold;">
           Follow On Social Media
         </div>
       </div>
       <div class="row" align="center">
         <div class="col" style="background:white;padding:20px;">
           <a href="https://twitter.com/telkomindonesia" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
           <a href="https://www.facebook.com/TelkomIndonesia/" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
           <a href="https://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
         </div>
         <script  src="js/index.js"></script>
       </div>


     <footer align="center" style="background: #f1f1f1; padding:15px;">
       Copyright &copy; 2018 - PT Telkom Indonesia
     </footer>
 </body>
 </html>
