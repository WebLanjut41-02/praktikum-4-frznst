	  <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?php echo base_url();?>/assets/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $this->session->userdata['username']?></span>
                <!-- <span class="text-secondary text-small">Project Manager</span> -->
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>C_Dashboard">
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Monitoring Sampah</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#sampahmasuk">Sampah Masuk</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>C_Dashboard/paging">Sampah Keluar</a></li> <!-- bisa ganti jadi sampah keluar -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#transaksinasabah">
              <span class="menu-title">Monitoring Transaksi Nasabah</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#keuangan">
              <span class="menu-title">Monitoring Keuangan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#E-Wallet">
              <span class="menu-title">E-Wallet</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#chat">
              <span class="menu-title">Chat</span>
            </a>
          </li>
        </ul>
      </nav>