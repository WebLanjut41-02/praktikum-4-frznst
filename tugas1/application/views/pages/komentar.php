  <?php $this->load->view('main/header');?>
    <section class="newsletter_area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="subscription_box text-center">
                        <h2 class="text-uppercase text-white">Masukan Komentar</h2>
                        <div class="subcribe-form">
                            <form  novalidate="true" action="<?php echo base_url()?>reply-komentar" method="POST" class="subscription relative">
                                <input name="komen" placeholder="" required type="text">
                               <button class="primary-btn hover d-inline">KIRIM</button>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
        <section class="newsletter_area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="subscription_box text-center">
                        <h2 class="text-uppercase text-white">Jawaban Komentar</h2>
                        
                            <h4><?php if(isset($kom)) echo $kom;?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('main/footer'); ?>