      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Input Sampah Keluar
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>C_Dashboard/sampahKeluar">Lihat Sampah Keluar</a></li>
                <li class="breadcrumb-item active" aria-current="page">Input Sampah Keluar</li>
              </ol>
            </nav>
          </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="<?=base_url()?>C_Penjualan/inputSampahKeluar" method="post"  class="forms-sample">
                    <div class="form-group">
                      <label for="exampleSelectGender">Jenis Sampah</label>
                        <select name="jenissampah" class="form-control" id="exampleSelectGender">
                          <option value=""></option>
                            <?php
                            foreach ($jenisproduk as $i) {
                              echo'
                              <option value="'.$i['kd_jenis'].'">'.$i['nama'].'</option>
                              ';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jumlah</label>
                      <input name="jumlah" type="number" class="form-control" id="exampleInputName1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Berat</label>
                      <input name="berat" type="number" class="form-control" id="exampleInputName1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tujuan</label>
                      <input name="tujuan" type="text" class="form-control" id="exampleInputName1" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>