      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Sampah Keluar
            </h3>
            <?php echo $this->session->flashdata('insert');?>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Lihat Sampah Keluar</li>
                <li class="breadcrumb-item"><a href="<?=base_url()?>C_Dashboard/inputSampahKeluar">Input Sampah Keluar</a></li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="<?php echo base_url()?>/C_Penjualan/cariWhere" method="POST"><input type="text" name="search"></td><td><input type="submit" name="searching" value="Cari"></form>
                    <?php 
                    $template = array(
                      'table_open'=> '<table class="table table-bordered">');
                    $this->table->set_template($template);
                    $this->table->set_heading('No', 'Jenis Produk', 'Berat','Tujuan','Tanggal','Jumlah');
                    echo $this->table->generate($sampahkeluar); 
                    echo "<center>".$halaman."</center>";
                    ?>
              
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->