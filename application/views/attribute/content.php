<?php
error_reporting(0);
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Beranda
      </h1>
    </section>
    <section class="content col-lg-12 connectedSortable" >
    	 <div class="page-content">
      <!-- /.ace-settings-container -->
      <div class="row">

        <div class="col-xs-12">
          <h2>Selamat Datang, <?php echo $this->session->userdata('user_fullname')?></h2>
          <div class="infobox infobox-green infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-text-height"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Surat Masuk</div>
              <div class="infobox-content"><?php echo $masuk?></div>
            </div>
          </div>

          <div class="infobox-data">
              <div class="infobox-content">Surat Keluar</div>
              <div class="infobox-content"><?php echo $keluar?></div>
            </div>
          </div>

          <div class="infobox infobox-blue infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-video-camera"></i>
            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    </section>
  </div>
