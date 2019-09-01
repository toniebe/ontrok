<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="<?php echo site_url('Dashboard')?>">
      <img src="<?php echo base_url(); ?>assets/images/logo-tangan.png" width="40" height="30" class="d-inline-block align-top" alt="">
      TELKOM INDONESIA
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" style="font-weight:bold; color:#000000;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Input Data
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="<?php echo site_url('C_Input')?>">Input ODP</a>
             <a class="dropdown-item" href="<?php echo site_url('C_Input2') ?>">Input LoP</a>
           </div>
         </li>
        <li class="nav-item active">
        <a class="nav-link" style="font-weight:bold;" href="<?php echo site_url('Welcome')?>"> Upload Data</a>
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" style="font-weight:bold; color:#000000;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             View Maps
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="<?php echo site_url('C_Map/all')?>">View All</a>
             <a class="dropdown-item" href="<?php echo site_url('C_Map') ?>">View Project</a>
           </div>
         </li>
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" style="font-weight:bold; color:#000000;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             View Table
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="<?php echo site_url('Crud')?>">View All</a>
             <a class="dropdown-item" href="<?php echo site_url('Crud2') ?>">View Project</a>
           </div>
         </li>

      </ul>
      <a class="nav-link" style="font-weight:bold;"><?php echo ucfirst($this->session->userdata('username')); ?></a>

      <div class="logout">
        <img src="<?php echo base_url(); ?>assets/images/logout.png" width="20" height="20" class="d-inline-block align-top" alt="logout">
        <a class="logout" style="font-weight:bold; color:black; " href="<?php echo site_url('Login/logout')?>">Log Out</a>
       </div>
      </div>
  </nav>
