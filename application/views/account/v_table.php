<title> Table </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<body>
  <br>
  <br>
  <br>
  <?php $this->load->view('account/navbar')?>
  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      VIEW
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo site_url('C_Map/all')?>">ALL</a>
      <a class="dropdown-item" href="<?php echo site_url('C_Map') ?>">EXISTING</a>
    </div>
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      VIEW TABEL
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo site_url('C_Table/gab')?>">ALL</a>
      <a class="dropdown-item" href="<?php echo site_url('C_Table') ?>">EXISTING</a>
    </div>
  </div>
  <br>
  <br>

<!-- <?php echo form_open('C_Table/cari') ?>
  <div class="span12" align="center">
     <input class="input span12 password" type="text" name="search" placeholder="search by name">
    <div class="actions">
     <input class="btn btn-danger" type="submit" name="sub" value="search now">
    </div>
    </div >
  </form> -->

<h2>TABEL ODP PROJECT</h2>
</div>
    <table  class="table table-bordered table-striped">
         <thead>
            <tr>
                <th>NO</th>
                <th>ODP_NAME</th>
                <th>LATITUDE</th>
                <th>LONGITUDE</th>
                <th>KETERANGAN</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $NO = 1;
                foreach ($hasil as $data) :
            ?>

            <tr>
                <td><?php echo $NO ?> </td>
                <td><?php echo $data->ODP_NAME; ?></td>
                <td><?php echo $data->LATITUDE; ?></td>
                <td><?php echo $data->LONGITUDE; ?></td>
                <td><?php echo $data->KETERANGAN; ?></td>
            </tr>
            <?php
             $NO++;
                endforeach;
            ?>
        </tbody>
    </table>
</div>
</body>
