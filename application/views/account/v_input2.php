<!DOCTYPE html>

<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
			<script>
			function populate(s1,s2){
				var s1 = document.getElementById(s1);
				var s2 = document.getElementById(s2);
				s2.innerHTML = "--SELECT--";
				if(s1.value == "Logistik"){
					var optionArray = ["P-18-3111-15-01-I|P-18-3111-15-01-I"];
				} else if(s1.value == "PT3 JABARSEL-I"){
					var optionArray = ["P-18-3111-15-02-I|P-18-3111-15-02-I"];
				} else if(s1.value == "PT3 JABARTIM-I"){
					var optionArray = ["P-18-3111-15-03-I|P-18-3111-15-03-I"];
				}else if(s1.value == "PT3 JABARTIMSEL"){
					var optionArray = ["P-18-3111-15-04-I|P-18-3111-15-04-I"];
				}else if(s1.value == "PT3 JABARTENGAH"){
					var optionArray = ["P-18-3111-15-05-I|P-18-3111-15-05-I"];
				}else if(s1.value == "PT3 BANDUNGBARAT"){
					var optionArray = ["P-18-3111-15-06-I|P-18-3111-15-06-I"];
				}else if(s1.value == "PT3 TREG III-I"){
					var optionArray = ["P-18-3111-15-80-I|P-18-3111-15-80-I"];
				}else if(s1.value == "PT2 JABARUT -I"){
					var optionArray = ["P-18-3111-16-01-I|P-18-3111-16-01-I"];
				}else if(s1.value == "PT2 JABARSEL -I"){
					var optionArray = ["P-18-3111-16-02-I|P-18-3111-16-02-I"];
				}else if(s1.value == "PT2 JABARTIM -I"){
					var optionArray = ["P-18-3111-16-03-I|P-18-3111-16-03-I"];
				}else if(s1.value == "PT2 JABARTIMSEL -I"){
					var optionArray = ["P-18-3111-16-04-I|P-18-3111-16-04-I"];
				}else if(s1.value == "PT2 JABARTENGAH -I"){
					var optionArray = ["P-18-3111-16-05-I|P-18-3111-16-05-I"];
				}else if(s1.value == "PT2 BANDUNGBARAT -I"){
						var optionArray = ["P-18-3111-16-06-I|P-18-3111-16-06-I"];
					}else if(s1.value == "PT2 TREGIII -I"){
						var optionArray = ["P-18-3111-16-02-I|P-18-3111-16-02-I"];
					}else if(s1.value == "Omset"){
						var optionArray = ["P-18-3111-21-1-I|P-18-3111-21-1-I"];
					}else if(s1.value == "NTE TREGIII -I"){
						var optionArray = ["P-18-3111-22-80-I|P-18-3111-22-80-I"];
					}else if(s1.value == "QE ACCESS JABARUT -I"){
							var optionArray = ["P-18-3111-30-01-I|P-18-3111-30-01-I"];
					}else if(s1.value == "QE ACCESS JABARSEL -I"){
							var optionArray = ["P-18-3111-30-02-I|P-18-3111-30-02-I"];
					}else if(s1.value == "QE ACCESS JABARTIM -I"){
							var optionArray = ["P-18-3111-30-03-I|P-18-3111-30-03-I"];
					}else if(s1.value == "QE ACCESS JABARTIMSEL -I"){
							var optionArray = ["P-18-3111-30-04-I|P-18-3111-30-04-I"];
					}else if(s1.value == "QE ACCESS JABARTENGAH -I"){
							var optionArray = ["P-18-3111-30-05-I|P-18-3111-30-05-I"];
					}else if(s1.value == "QE ACCESS BANDUNGBARAT -I"){
							var optionArray = ["P-18-3111-30-06-I|P-18-3111-30-06-I"];
					}else if(s1.value == "QE ACCESS TREGIII -I"){
							var optionArray = ["P-18-3111-30-80-I|P-18-3111-30-80-I"];
					}else if(s1.value == "QE RELOKASI UTILITAS JABARUT -I"){
						var optionArray = ["P-18-3111-28-01-I|P-18-3111-28-01-I"];
					}else if(s1.value == "QE RELOKASI UTILITAS JABARSEL -I"){
						var optionArray = ["P-18-3111-28-02-I|P-18-3111-28-02-I"];
					}else if(s1.value == "QE RELOKASI UTILITAS JABARTIM -I"){
						var optionArray = ["P-18-3111-28-03-I|P-18-3111-28-03-I"];
					}else if(s1.value == "QE RELOKASI UTILITAS JABARTIMSEL -I"){
						var optionArray = ["P-18-3111-28-04-I|P-18-3111-28-04-I"];
					}else if(s1.value == "QE RELOKASI UTILITAS JABARTENGAH -I"){
						var optionArray = ["P-18-3111-28-05-I|P-18-3111-28-05-I"];
					}else if(s1.value == "QE RELOKASI UTILITAS BANDUNGBARAT -I"){
						var optionArray = ["P-18-3111-28-06-I|P-18-3111-28-06-I"];
					}else if(s1.value == "QE RELOKASI UTILITAS TREG -I"){
						var optionArray = ["P-18-3111-28-80-I|P-18-3111-28-80-I"];
					}else if(s1.value == "QE RECOVERY JABARUT -I"){
						var optionArray = ["P-18-3111-31-01-I|P-18-3111-31-01-I"];
					}else if(s1.value == "QE RECOVERY JABARSEL -I"){
						var optionArray = ["P-18-3111-31-02-I|P-18-3111-31-02-I"];
					}else if(s1.value == "QE RECOVERY JABARTIM -I"){
						var optionArray = ["P-18-3111-31-03-I|P-18-3111-31-03-I"];
					}else if(s1.value == "QE RECOVERY JABARTIMSEL -I"){
						var optionArray = ["P-18-3111-31-04-I|P-18-3111-31-04-I"];
					}else if(s1.value == "QE RECOVERY JABARTENGAH -I"){
						var optionArray = ["P-18-3111-31-05-I|P-18-3111-31-05-I"];
					}else if(s1.value == "QE RECOVERY BANDUNGBARAT -I"){
						var optionArray = ["P-18-3111-31-06-I|P-18-3111-31-06-I"];
					}else if(s1.value == "QE RECOVERY TREGIII -I"){
						var optionArray = ["P-18-3111-31-80-I|P-18-3111-31-80-I"];
					}else if(s1.value == "Lastmile CLO TR3"){
						var optionArray = ["P-18-3322-26-01-I|P-18-3322-26-01-I"];
					}else if(s1.value == "Lastmile HEM TR3"){
						var optionArray = ["P-18-3232-25-01-I|P-18-3232-25-01-I"];
					}else if(s1.value == "FO Node-B FIMO TR3"){
						var optionArray = ["P-18-3352-23-01-I|P-18-3352-23-01-I"];
					}else if(s1.value == "FO Node-B FIRO TR3"){
						var optionArray = ["P-18-3352-24-01-I|P-18-3352-24-01-I"];
					}else if(s1.value == "FTTH"){
						var optionArray = ["P-17-3111-01-01-I|P-17-3111-01-01-I","P-16-3111-06-01-I|P-16-3111-06-01-I"];
					}else if(s1.value == "PSB PT1"){
						var optionArray = ["P-17-3111-02-01-I|P-17-3111-02-01-I"];
					}else if(s1.value == "PSB Copper"){
						var optionArray = ["P-17-3111-03-01-I|P-17-3111-03-01-I"];
					}else if(s1.value == "LME PT2"){
						var optionArray = ["P-17-3111-04-01-I|P-17-3111-04-01-I"];
					}else if(s1.value == "QE RECOVERY"){
						var optionArray = ["P-17-3111-13-01-I|P-17-3111-13-01-I"];
					}else if(s1.value == "RELOKASI ALPRO"){
						var optionArray = ["P-17-3111-14-01-I|P-17-3111-14-01-I"];
					}else if(s1.value == "RELOKASI UTILITAS"){
						var optionArray = ["P-17-3111-15-01-I|P-17-3111-15-01-I","T-14-3000-07-01-I|T-14-3000-07-01-I"];
					}else if(s1.value == "QE AKSES"){
						var optionArray = ["P-17-3111-16-01-I|P-17-3111-16-01-I"];
					}else if(s1.value == "BOP LAKWAS"){
						var optionArray = ["P-17-3111-58-01-I|P-17-3111-58-01-I"];
					}else if(s1.value == "Dualhoming HEM"){
						var optionArray = ["P-17-3231-07-01-I|P-17-3231-07-01-I"];
					}else if(s1.value == "HEM"){
						var optionArray = ["P-17-3231-10-01-I|P-17-3231-10-01-I","P-16-3231-11-01-I|P-17-3231-11-01-I"];
					}else if(s1.value == "OLO"){
						var optionArray = ["P-17-3331-12-01-I|P-17-3331-12-01-I"];
					}else if(s1.value == "NODE B FIMO"){
						var optionArray = ["P-17-3351-05-01-I|P-17-3351-05-01-I"];
					}else if(s1.value == "NODE B FIRO"){
						var optionArray = ["P-17-3351-06-01-I|P-17-3351-06-01-I"];
					}else if(s1.value == "Dualhoming NodeB TR-3"){
						var optionArray = ["P-17-3351-07-01-I|P-17-3351-07-01-I"];
					}else if(s1.value == "LME Wifi"){
						var optionArray = ["P-17-3561-08-01-I|P-17-3561-08-01-I","P-16-3361-24-01-I|P-16-3361-24-01-I","P-17-3561-08-01-I|P-17-3561-08-01-I"];
					}else if(s1.value == "NIQE OSP"){
						var optionArray = ["P-16-3112-30-02-I|P-16-3112-30-02-I"];
					}else if(s1.value == "NODE B"){
						var optionArray = ["P-16-3351-01-01-I|P-17-3351-01-01-I"];
					}else if(s1.value == "NIQE OSP TR 3"){
						var optionArray = ["P-17-3551-70-01-I|P-17-3551-70-01-I"];
					}else if(s1.value == "Dualhoming Node B"){
						var optionArray = ["P-17-3351-07-01-I|P-17-3351-07-01-I"];
					}else if(s1.value == "Lastmile OLO TR3"){
						var optionArray = ["P-18-3232-26-01-I|P-17-3232-26-01-I"];
					}else if(s1.value == "LME WIFI TR3"){
						var optionArray = ["P-18-3111-32-01-I|P-17-3111-32-01-I"];
					}
				for(var option in optionArray){
					var pair = optionArray[option].split("|");
					var newOption = document.createElement("option");
					newOption.value = pair[0];
					newOption.innerHTML = pair[1];
					s2.options.add(newOption);
				}
			}
			</script>

			<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo-tangan1.png">
			<meta charset="UTF-8">
			<title> Input Data | TREG</title>
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
		<div class="row" align="center">
			<div class="col" style="padding: 50px; margin-top: 50px; font-weight: bold; font-size: 30px;">
				Input LoP
			</div>
		</div>
		<div class="container" align="center">

			<?php echo form_open("C_input2/inputvendor");?>
				<table>
					<tr>
						<td><label>New/Co</label></td>
						<td style="color: #ffffff;">:</td>
						<td>
							<select name="NEWCO">
								<option value="">--SELECT--</option>
								<option value="New">New</option>
								<option value="CO">CO</option>
							</select>
						</td>
					</tr>

					<tr>
						<td><label>DoCC</label></td>
						<td style="color: #ffffff;">:</td>
						<td>
							<select name="DoCC" id="DoCC" onchange="match('this.id','Witel')">
								<option value="">--SELECT--</option>
								<option value="PR" id="pr">PR</option>
								<option value="PO" id="po">PO</option>
								<option value="GR" id="GR">GR</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Witel</label></td>
						<td style="color: #ffffff;">:</td>
						<td>
							<select name="Witel" id="Witel">
								<option value="">--SELECT--</option>
								<option value="BDB">BDB</option>
								<option value="BDG">BDG</option>
								<option value="CBN">CBN</option>
								<option value="KWA">KWA</option>
								<option value="TR3">TR3</option>
								<option value="TSM">TSM</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>PACKET</label></td>
						<td style="color: #ffffff;">:</td>
						<td>
				<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
					<option value="">--SELECT--</option>
					<option value="FO Node-B FIMO TR3" id ="FO">FO Node-B FIMO TR3</option>
					<option value="FO Node-B FIRO TR3" id ="FN">FO Node-B FIRO TR3</option>
					<option value="Lastmile HEM TR3" id ="LASHEM">Lastmile HEM TR3</option>
					<option value="Lastmile CLO TR3" id ="LASCLO">Lastmile OLO TR3</option>
					<option value="LME PT2" id ="LME">LME PT2</option>
					<option value="LME Wifi TR3" id ="LMEWIFI">LME Wifi TR3</option>
					<option value="Omset" id ="OM">Migrasi TREG III / i</option>
					<option value="Logistik" id ="LOG">OSP FTTH, PT3 JABARUT -I</option>
					<option value="PT3 JABARSEL-I" id ="JABARSEL3">OSP FTTH, PT3 JABARSEL -I</option>
					<option value="PT3 JABARTIM-I" id ="JABARTIM3">OSP FTTH, PT3 JABARTIM -I</option>
					<option value="PT3 JABARTIMSEL" id ="JABARTIMSEL3">OSP FTTH, PT3 JABARTIMSEL</option>
					<option value="PT3 JABARTENGAH" id ="JABARTENGAH3">OSP FTTH, PT3 JABARTENGAH</option>
					<option value="PT3 BANDUNGBARAT" id ="BANRAT3">OSP FTTH, PT3 BANDUNGBARAT</option>
					<option value="PT3 TREG III-I"  id ="TREG3">OSP FTTH, PT3 TREG III-I</option>
					<option value="PT2 JABARUT -I"  id ="JABARUT2">PT2 JABARUT -I</option>
					<option value="PT2 JABARSEL -I" id ="JABARSEL2">PT2 JABARSEL -I</option>
					<option value="PT2 JABARTIM -I" id ="JABARTIM2">PT2 JABARTIM -I</option>
					<option value="PT2 JABARTIMSEL -I" id ="JABARTIMSEL2">PT2 JABARTIMSEL -I</option>
					<option value="PT2 JABARTENGAH -I" id ="JABARTENGAH2">PT2 JABARTENGAH -I</option>
					<option value="PT2 BANDUNGBARAT -I" id ="BANDUNGBARAT2">PT2 BANDUNGBARAT -I</option>
					<option value="PT2 TREGIII -I" id ="TREGI">PT2 TREGIII -I</option>
					<option value="NTE TREGIII -I"id ="TREGII">NTE TREGIII -I</option>
					<option value="QE RELOKASI UTILITAS JABARUT -I" id ="QEUT">QE RELOKASI UTILITAS JABARUT -I</option>
					<option value="QE RELOKASI UTILITAS JABARSEL -I"id ="QESEL">QE RELOKASI UTILITAS JABARSEL -I</option>
					<option value="QE RELOKASI UTILITAS JABARTIM -I" id ="QETIM">QE RELOKASI UTILITAS JABARTIM -I</option>
					<option value="QE RELOKASI UTILITAS JABARTIMSEL -I"id ="QETIMSEL">QE RELOKASI UTILITAS JABARTIMSEL -I</option>
					<option value="QE RELOKASI UTILITAS JABARTENGAH -I"id ="QETENGAH">QE RELOKASI UTILITAS JABARTENGAH -I</option>
					<option value="QE RELOKASI UTILITAS BANDUNGBARAT -I"id ="QEBARBAR">QE RELOKASI UTILITAS BANDUNGBARAT -I</option>
					<option value="QE RELOKASI UTILITAS TREG"id ="QEREG">QE RELOKASI UTILITAS TREG</option>
					<option value="QE ACCESS JABARUT -I"id ="QEACCUT">QE ACCESS JABARUT -I</option>
					<option value="QE ACCESS JABARSEL -I"id ="QEACCSEL">QE ACCESS JABARSEL -I</option>
					<option value="QE ACCESS JABARTIM -I"id ="QEACCTIM">QE ACCESS JABARTIM -I</option>
					<option value="QE ACCESS JABARTIMSEL -I"id ="QEACCTIMSEL">QE ACCESS JABARTIMSEL -I</option>
					<option value="QE ACCESS JABARTENGAH -I"id ="QEACCTENGAH">QE ACCESS JABARTENGAH -I</option>
					<option value="QE ACCESS BANDUNGBARAT -I"id ="QEACCBARBAR">QE ACCESS BANDUNGBARAT -I</option>
					<option value="ACCESS TREGIII -I" id ="ACCTREGG">QE ACCESS TREGIII -I</option>
					<option value="QE RECOVERY JABARUT -I"id ="QERECUT">QE RECOVERY JABARUT -I</option>
					<option value="QE RECOVERY JABARSEL -I"id ="QERESEL">QE RECOVERY JABARSEL -I</option>
					<option value="QE RECOVERY JABARTIM -I"id ="QERECTIM">QE RECOVERY JABARTIM -I</option>
					<option value="QE RECOVERY JABARTIMSEL -I"id ="QERECTIMSEL">QE RECOVERY JABARTIMSEL -I</option>
					<option value="QE RECOVERY JABARTENGAH -I"id ="QERECTENGAH">QE RECOVERY JABARTENGAH -I</option>
					<option value="QE RECOVERY BANDUNGBARAT -I"id ="QERECBARBAR">QE RECOVERY BANDUNGBARAT -I</option>
					<option value="QE RECOVERY TREGIII -I"id ="QERECTREG" >QE RECOVERY TREGIII -I</option>
					<option value="FTTH "id ="FTTH" >FTTH </option>
					<option value="PSB PT1"id ="PSB" >PSB PT1</option>
					<option value="PSB Copper"id ="Copper" >PSB Copper</option>
					<option value="LME PT2"id ="LME" >LME PT2</option>
					<option value="QE RECOVERY"id ="REC" >QE RECOVERY</option>
					<option value="RELOKASI ALPRO"id ="ALPRO" >RELOKASI ALPRO</option>
					<option value="RELOK UTILITAS"id ="UTILITAS" >RELOK UTILITAS</option>
					<option value="QE AKSES"id ="AKSES" >QE AKSES</option>
					<option value="BOP LAKWAS"id ="BOP" >BOP LAKWAS</option>
					<option value="Dualhoming HEM"id ="Home" >Dualhoming HEM</option>
					<option value="HEM"id ="HEM" >HEM</option>
					<option value="OLO"id ="LO" >OLO</option>
					<option value="NODE B FIMO"id ="FIMO" >NODE B FIMO</option>
					<option value="NODE B FIRO"id ="FIRO" >NODE B FIRO</option>
					<option value="Dualhoming NodeB TR-3"id ="TR-3" >Dualhoming NodeB TR-3</option>
					<option value="LME Wifi"id ="LMEWifi" >LME Wifi</option>
					<option value="NIQE OSP"id ="OSP" >NIQE OSP</option>
					<option value="NODE B"id ="NODE" >NODE B</option>
					<option value="NIQE OSP TR 3"id ="NIQE 3" >NIQE OSP TR 3</option>
					<option value="Lastmile HEM TR3"id ="last" >Lastmile HEM TR3</option>
					<option value="Lastmile OLO TR3"id ="OLO" >Lastmile OLO TR3</option>
					<option value="LME WIFI TR3"id ="Wifi" >LME WIFI TR3</option>
					</select>
				</td>
				</tr>
				<tr>
					<td><label>WBS</label></td>
					<td style="color: #ffffff;">:</td>
					<td>
				<select id="slct2" name="slct2"></select>
				</td>
				</tr>
					<tr>
						<td><label>Ref. Document Number</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="RefDocument" value=""></td>
					</tr>
					<tr>
						<td><label>Item</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="Item" value=""></td>
					</tr>
					<tr>
						<td><label>Cost Element</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="CostElement" value=""></td>
					</tr>
					<tr>
						<td><label>Name</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="Name" value=""></td>
					</tr>
					<tr>
						<td><label>Vendor</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="vendor" value=""></td>
					</tr>
					<tr>
						<td><label>Username</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<tr>
							<td><label>Document Date</label></td>
							<td style="color: #ffffff;">:</td>
							<td><input type="text" name="Document_Date" value=""></td>
						</tr>
					</tr>
					<tr>
						<td><label>Value TranCurr</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="Value_Trancurr" value=""></td>
					</tr>
					<tr>
						<td><label>Debit Date</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="Debit_Date" value=""></td>
					</tr>
					<tr>
						<td><label>Keterangan</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="Ket" value=""></td>
					</tr>
					<tr>
						<td><label>Vendor Name</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="Ven_Name" value=""></td>
					</tr>
					<tr>
						<td><label>Vendor Name 2</label></td>
						<td style="color: #ffffff;">:</td>
						<td><input type="text" name="ODP" value=""></td>
					</tr>


				</table>
				<br>
				<td align="center"> <input type="submit" name="submit" value="SUBMIT" onclick="myFunction()">  </td>
			</form>
		</div>
		<br>
		<br>
		<footer align="center" style="background: #f1f1f1; padding:15px;">
       Copyright &copy; 2018 - PT Telkom Indonesia
        </footer>
	</body>
</html>
