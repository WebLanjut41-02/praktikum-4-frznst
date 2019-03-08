<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GoniGoni Indonesia</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>/assets/assetsdashboard/img/gg-icon.png" />
</head>

<body>
  
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="<?php echo base_url();?>/assets/assetsdashboard/img/gg-icon.png">
              </div>

              <?php if($this->session->flashdata('usercek')){ ?>

              <div class="alert-danger">
              <?php echo $this->session->flashdata('usercek');
              echo "</div>";} ?>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>

              <form action="<?php echo base_url()?>C_User/cekregister" method="post" class="pt-3">
                <div class="form-group">
                  <input type="text" name="nama_bs" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nama Bank Sampah">
                  <?php 
                  if(form_error('nama_bs')){
                    ?>
                  <br>
                  <div class="alert-danger">
                  <?php
                  echo form_error('nama_bs');
                    echo "</div>";
                  }
                  ?>
                </div>

                <div class="form-group">
                  <input type="text" name="nohp_bs" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nomor Hp (sebagai nomor rekening)">
                   <?php 
                  if(form_error('nohp_bs')){
                    ?>
                  <br>
                  <div class="alert-danger">
                  <?php
                  echo form_error('nohp_bs');
                    echo "</div>";
                  }
                  ?>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                      <?php 
                  if(form_error('email')){
                    ?>
                  <br>
                  <div class="alert-danger">
                  <?php
                  echo form_error('email');
                    echo "</div>";
                  }
                  ?>
                </div>
                <div class="form-group">
                  <input type="text" name="username_bs" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                    <?php 
                  if(form_error('username_bs')){
                    ?>
                  <br>
                  <div class="alert-danger">
                  <?php
                  echo form_error('username_bs');
                    echo "</div>";
                  }
                  ?>
                </div>
                <div class="form-group">
                  <input type="password" name="katasandi_bs" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Katasandi">
                   <?php 
                  if(form_error('katasandi_bs')){
                    ?>
                  <br>
                  <div class="alert-danger">
                  <?php
                  echo form_error('katasandi_bs');
                    echo "</div>";
                  }
                  ?>
                </div>
                <div class="form-group">
                  <input type="password" name="rekatasandi_bs" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Ulangi Katasandi">
                   <?php 
                  if(form_error('rekatasandi_bs')){
                    ?>
                  <br>
                  <div class="alert-danger">
                  <?php
                  echo form_error('rekatasandi_bs');
                    echo "</div>";
                  }
                  ?>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input type="submit" value="DAFTAR" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Sudah punya akun ? <a href="<?php echo base_url();?>C_User/loginForm/" class="text-primary">Masuk</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url();?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>/assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>/assets/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
