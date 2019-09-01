<html>
<head>
  <?php echo $map['js']; ?>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo-tangan1.png">
  <meta charset="UTF-8">
  <title> Maps</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
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
  <br>
  <br>
  <br>


  <br>
  <br>
	<?php echo $map['html']; ?>

</body>

</html>
