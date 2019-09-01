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
<div class="row" align="center" style="margin-top:50px;">
  <div class="col" >
<iframe src="https://www.google.com/maps/d/embed?mid=1VXKNT1kw4uFxNHi9ILPSHR9J0A4SA4OL&ll=-6.9793687,107.5701632" width="1350" height="600"></iframe>
  </div>
</div>
</body>
 </html>
