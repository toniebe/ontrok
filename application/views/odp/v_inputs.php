<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <head>
   <meta charset="UTF-8">
   <title>
     Pendaftaran Akun | TREG
   </title>
 </head>
 <body>
     <h2>Pendaftaran Akun</h2>

     <?php echo form_open('input');?>
     <p>NOSS_ID:</p>
     <p>
     <input type="text" name="NOSS_ID" value="<?php echo set_value('NOSS_ID'); ?>"/>
     </p>
     <p> <?php echo form_error('NOSS_ID'); ?> </p>

     <p>ODP_INDEX:</p>
     <p>
     <input type="text" name="ODP_INDEX" value="<?php echo set_value('ODP_INDEX'); ?>"/>
     </p>
     <p> <?php echo form_error('ODP_INDEX'); ?> </p>

     <p>ODP_NAME:</p>
     <p>
     <input type="text" name="ODP_NAME" value="<?php echo set_value('ODP_NAME'); ?>"/>
     </p>
     <p> <?php echo form_error('ODP_NAME'); ?> </p>

     <p>LATITUDE:</p>
     <p>
     <input type="text" name="LATITUDE" value="<?php echo set_value('LATITUDE'); ?>"/>
     </p>
     <p> <?php echo form_error('LATITUDE'); ?> </p>

     <p>LONGITUDE:</p>
     <p>
     <input type="text" name="LONGITUDE" value="<?php echo set_value('LONGITUDE'); ?>"/>
     </p>
     <p> <?php echo form_error('LONGITUDE'); ?> </p>

     <p>CLUSNAME:</p>
     <p>
     <input type="text" name="CLUSNAME" value="<?php echo set_value('CLUSNAME'); ?>"/>
     </p>
     <p> <?php echo form_error('CLUSNAME'); ?> </p>

     <p>CLUSTERSTATUS:</p>
     <p>
     <input type="text" name="CLUSTERSTATUS" value="<?php echo set_value('CLUSTERSTATUS'); ?>"/>
     </p>
     <p> <?php echo form_error('CLUSTERSTATUS'); ?> </p>

     <p>AVAI:</p>
     <p>
     <input type="text" name="AVAI" value="<?php echo set_value('AVAI'); ?>"/>
     </p>
     <p> <?php echo form_error('AVAI'); ?> </p>

     <p>USED:</p>
     <p>
     <input type="text" name="USED" value="<?php echo set_value('USED'); ?>"/>
     </p>
     <p> <?php echo form_error('USED'); ?> </p>

     <p>RSV:</p>
     <p>
     <input type="text" name="RSV" value="<?php echo set_value('RSV'); ?>"/>
     </p>
     <p> <?php echo form_error('RSV'); ?> </p>

     <p>RSK:</p>
     <p>
     <input type="text" name="RSK" value="<?php echo set_value('RSK'); ?>"/>
     </p>
     <p> <?php echo form_error('RSK'); ?> </p>

     <p>IS TOTAL:</p>
     <p>
     <input type="text" name="IS_TOTAL" value="<?php echo set_value('IS_TOTAL'); ?>"/>
     </p>
     <p> <?php echo form_error('IS_TOTAL'); ?> </p>

     <p>REGIONAL:</p>
     <p>
     <input type="text" name="REGIONAL" value="<?php echo set_value('REGIONAL'); ?>"/>
     </p>
     <p> <?php echo form_error('REGIONAL'); ?> </p>

     <p>WITEL:</p>
     <p>
     <input type="text" name="WITEL" value="<?php echo set_value('WITEL'); ?>"/>
     </p>
     <p> <?php echo form_error('WITEL'); ?> </p>

     <p>DATEL:</p>
     <p>
     <input type="text" name="DATEL" value="<?php echo set_value('DATEL'); ?>"/>
     </p>
     <p> <?php echo form_error('DATEL'); ?> </p>

     <p>STO:</p>
     <p>
     <input type="text" name="STO" value="<?php echo set_value('STO'); ?>"/>
     </p>
     <p> <?php echo form_error('STO'); ?> </p>

     <p>STO_DESC:</p>
     <p>
     <input type="text" name="STO_DESC" value="<?php echo set_value('STO_DESC'); ?>"/>
     </p>
     <p> <?php echo form_error('STO_DESC'); ?> </p>

     <p>ODP_INFO:</p>
     <p>
     <input type="text" name="ODP_INFO" value="<?php echo set_value('ODP_INFO'); ?>"/>
     </p>
     <p> <?php echo form_error('ODP_INFO'); ?> </p>

     <p>UPDATE DATE:</p>
     <p>
     <input type="text" name="UPDATE_DATE" value="<?php echo set_value('UPDATE_DATE'); ?>"/>
     </p>
     <p> <?php echo form_error('UPDATE_DATE'); ?> </p>

     <p>KETERANGAN:</p>
     <p>
     <input type="text" name="KETERANGAN" value="<?php echo set_value('KETERANGAN'); ?>"/>
     </p>
     <p> <?php echo form_error('KETERANGAN'); ?> </p>
     <p>

       
     <input type="submit" name="btnSubmit" value="Daftar" />
     </p>

     <?php echo form_close();?>

 </body>
 </html>
