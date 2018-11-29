  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/image/blank.jpg" class="" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

<li>
          <a href="<?php echo site_url('Home');?>">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
      </li>

      <!-- Konten -->
      <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Surat</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
              <li>
                <a href="<?php echo site_url('Masuk')?>">
                  <i class="fa fa-inbox"></i> <span>Surat Masuk</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('Keluar')?>">
                  <i class="fa fa-send"></i> <span>Surat Keluar</span>
                  <span class="pull-right-container">
                  </span>
                </a>
                </li>
              </ul>
            </li>
            <li>
                <a href="<?php echo site_url('Pegawai')?>">
                  <i class="fa fa-circle-o"></i> <span>Data Pegawai</span>
                  <span class="pull-right-container">
                  </span>
                </a>
                </li>
                <li>
                <a href="<?php echo site_url('Kibb')?>">
                  <i class="fa fa-circle-o"></i> <span>KIB B</span>
                  <span class="pull-right-container">
                  </span>
                </a>
                </li>
                <li>
                <a href="<?php echo site_url('Kibc')?>">
                  <i class="fa fa-circle-o"></i> <span>KIB C</span>
                  <span class="pull-right-container">
                  </span>
                </a>
                </li>
                <li>
                <a href="<?php echo site_url('Kibd')?>">
                  <i class="fa fa-circle-o"></i> <span>KIB D</span>
                  <span class="pull-right-container">
                  </span>
                </a>
                </li>
                <li>
                <a href="<?php echo site_url('Kibf')?>">
                  <i class="fa fa-circle-o"></i> <span>KIB F</span>
                  <span class="pull-right-container">
                  </span>
                </a>
                </li>
                <!-- <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Data Kompetensi</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Kompetensi1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penguji Kendaraan Bermotor</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Kompetensi2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Rekayasa Lalu Lintas</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Kompetensi3')?>" >
                      <i class="fa fa-circle-o"></i> <span>Trafick Light</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Kompetensi4')?>" >
                      <i class="fa fa-circle-o"></i> <span>Pengelolaan Terminal</span>
                    </a></li>
                    <li>
                      <a href="<?php echo site_url('Kompetensi5')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penyidik PNS</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Kompetensi6')?>" >
                      <i class="fa fa-circle-o"></i> <span>Analisi Data LLAJ</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Kompetensi7')?>" >
                      <i class="fa fa-circle-o"></i> <span>Angkutan Umum</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Kompetensi8')?>" >
                      <i class="fa fa-circle-o"></i> <span>Transportasi Perkotaan</span>
                    </a></li>
                    <li>
                      <a href="<?php echo site_url('Kompetensi9')?>" >
                        <i class="fa fa-circle-o"></i> <span>Analisa Dampak Lalu Lintas</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Kompetensi10')?>" >
                      <i class="fa fa-circle-o"></i> <span>Pengawasan Lalu Lintas</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Kompetensi11')?>" >
                      <i class="fa fa-circle-o"></i> <span>Orientasi Lalu Lintas</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Kompetensi12')?>" >
                      <i class="fa fa-circle-o"></i> <span>Parkir</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Kompetensi13')?>" >
                      <i class="fa fa-circle-o"></i> <span>Administrasi Keuangan</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Kompetensi14')?>" >
                      <i class="fa fa-circle-o"></i> <span>Administrasi Kepegawaian</span>
                    </a></li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Pendidikan Struktural</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Diklat4')?>" >
                        <i class="fa fa-circle-o"></i> <span>Diklat PIM IV</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Diklat3')?>" >
                      <i class="fa fa-circle-o"></i> <span>Diklat PIM III</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Diklat2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Diklat PIM II</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Diklat1')?>" >
                      <i class="fa fa-circle-o"></i> <span>Diklat PIM I</span>
                    </a></li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Pendidikan Fungsional</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Fungsional1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penguji Kendaraan Bermotor</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Fungsional2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Perencanaan</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Fungsional3')?>" >
                      <i class="fa fa-circle-o"></i> <span>Pengarsipan</span>
                    </a></li>
                  </ul>
                </li> -->
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Transportasi Darat</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Kendaraan Pribadi</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Kendaraanpribadi1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Kendaraan Roda 4</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Kendaraanpribadi2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Kendaraan Roda 2</span>
                    </a></li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Moda Angkutan B/O</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Angkutan Barang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Angkutanbarang1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Truk Barang Umum</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Angkutanbarang2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Mobil Box</span>
                    </a></li>
                    <li>
                      <a href="<?php echo site_url('Angkutanbarang3')?>" >
                        <i class="fa fa-circle-o"></i> <span>Mobil Peti Kemas</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Angkutanbarang4')?>" >
                      <i class="fa fa-circle-o"></i> <span>Mobil Tangki</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Jembatan Timbang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Jembatan1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Berfungsi</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Jembatan2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Tidak Berfungsi</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Angkutan Umum</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Angkutanumum1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Bus</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Angkutanumum2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Angkutan Kota</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Angkutanumum3')?>" >
                      <i class="fa fa-circle-o"></i> <span>Taksi</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Angkutanumum4')?>" >
                      <i class="fa fa-circle-o"></i> <span>Ojek</span>
                    </a></li>
                    <li>
                      <a href="<?php echo site_url('Angkutanumum5')?>" >
                        <i class="fa fa-circle-o"></i> <span>Bajaj/Kancil</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Angkutanumum6')?>" >
                      <i class="fa fa-circle-o"></i> <span>Bemo</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Angkutanumum7')?>" >
                      <i class="fa fa-circle-o"></i> <span>Becak</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Angkutanumum8')?>" >
                      <i class="fa fa-circle-o"></i> <span>Delman</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Perusahaan Angkutan</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Perusahaanumum1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Milik Pemerintah</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Perusahaanumum2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Milik Swasta</span>
                    </a></li>
                  </ul>
                </li>
                    <li>
                      <a href="<?php echo site_url('Pengujiankir')?>" >
                        <i class="fa fa-circle-o"></i> <span>Pengujian KIR</span>
                      </a>
                    </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Terminal</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Terminal1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Terminal Tipe A</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Terminal2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Terminal Tipe B</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Terminal3')?>" >
                      <i class="fa fa-circle-o"></i> <span>Terminal Tipe C</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Terminal Tipe A</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Tipea1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penumpang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Tipea2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Penumpang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Terminal Tipe B</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Tipeb1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penumpang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Tipeb2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Penumpang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Terminal Tipe C</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Tipec1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penumpang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Tipec2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Penumpang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                   <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Moda ASDP</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Modaasdp1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Ferry</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Modaasdp2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Kapal Perintis</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Modaasdp3')?>" >
                      <i class="fa fa-circle-o"></i> <span>Kapal Komersil</span>
                    </a></li>
                    <li><a href="<?php echo site_url('Modaasdp4')?>" >
                      <i class="fa fa-circle-o"></i> <span>Perahu/Sampan</span>
                    </a></li>
                    <li>
                      <a href="<?php echo site_url('Modaasdp5')?>" >
                        <i class="fa fa-circle-o"></i> <span>Rakit/Getek</span>
                      </a>
                    </li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Perusahaan ASDP</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Perusahaanasdp1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Milik Pemerintah</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Perusahaanasdp2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Milik Swasta</span>
                    </a></li>
                  </ul>
                </li>
                  </ul>
                </li>
            </ul>
          </li>
          <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Dermaga</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('Dermaga')?>" >
                      <i class="fa fa-circle-o"></i> <span>Dermaga</span>
                    </a></li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Penumpang Dermaga</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Dermaga1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penumpang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Dermaga2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Penumpang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Barang Dermaga</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Dermaga3')?>" >
                        <i class="fa fa-circle-o"></i> <span>Barang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Dermaga4')?>" >
                      <i class="fa fa-circle-o"></i> <span>Barang Keluar</span>
                    </a></li>
                  </ul>
                </li>
              </ul>
            </li>
          <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Transportasi Laut</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Moda Angkutan Laut</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Kapal Penumpang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Kapalpenumpang1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Regional</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Kapalpenumpang2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Lokal</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Kapal Barang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Kapalbarang1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Regional</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Kapalbarang2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Lokal</span>
                    </a></li>
                  </ul>
                </li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Badan Usaha</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Badanusaha1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Regional</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Badanusaha2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Lokal</span>
                    </a></li>
                  </ul>
                </li>
                <li>
                      <a href="<?php echo site_url('Terminalpetikemas')?>" >
                        <i class="fa fa-circle-o"></i> <span>Terminal Peti Kemas</span>
                      </a></li>
                      <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Perusahaan</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Perusahaanlaut1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Milik Pemerintah</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Perusahaanlaut2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Milik Swasta</span>
                    </a></li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Pelabuhan Perintis</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Perintis1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penumpang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Perintis2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Penumpang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Pelabuhan Penumpang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Penumpang1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penumpang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Penumpang2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Penumpang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Pelabuhan Pengumpan</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Penumpang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Pengumpan1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Penumpang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Pengumpan2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Penumpang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Barang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Pengumpan3')?>" >
                        <i class="fa fa-circle-o"></i> <span>Barang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Pengumpan4')?>" >
                      <i class="fa fa-circle-o"></i> <span>Barang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                  </ul>
                </li>
                                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Pelabuhan Peti Kemas</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Petikemas1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Peti Kemas Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Petikemas2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Peti Kemas Keluar</span>
                    </a></li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Pelabuhan Barang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Barang1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Barang Masuk</span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Barang2')?>" >
                      <i class="fa fa-circle-o"></i> <span>Barang Keluar</span>
                    </a></li>
                  </ul>
                </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Jenis Pelabuhan Laut</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Jenis1')?>" >
                        <i class="fa fa-circle-o"></i> <span>Pelabuhan Perintis</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('Jenis2')?>" >
                        <i class="fa fa-circle-o"></i> <span>Pelabuhan Penumpang</span>
                      </a>
                    </li>
                    <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Pelabuhan Pengumpan</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="<?php echo site_url('Jenis3')?>" >
                        <i class="fa fa-circle-o"></i> <span>Regional </span>
                      </a>
                    </li>
                    <li><a href="<?php echo site_url('Jenis4')?>" >
                      <i class="fa fa-circle-o"></i> <span>Lokal </span>
                    </a></li>
                  </ul>
                </li>
                <li>
                      <a href="<?php echo site_url('Jenis5')?>" >
                        <i class="fa fa-circle-o"></i> <span>Pelabuhan Peti Kemas</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('Jenis6')?>" >
                        <i class="fa fa-circle-o"></i> <span>Pelabuhan Barang</span>
                      </a>
                    </li>
                  </ul>
                </li>
            </ul>
          </li>

  <li class="">
      <a href="<?php echo site_url('User')?>">
      <i class="menu-icon fa fa-users"></i>
      <span class="menu-text"> User </span>
      </a>
      <b class="arrow"></b>
    </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
