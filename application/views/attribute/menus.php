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
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Kartu Inventaris Barang</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
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
                 </ul>
               </li>
                <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-th-list"></i> <span>Transportasi</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                   <li>
                     <a href="<?php echo site_url('Tdarat')?>" >
                    <i class="fa fa-circle-o"></i> <span>Transportasi Darat</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
                   </li> 
                      <li>
                     <a href="<?php echo site_url('Tlaut')?>" >
                    <i class="fa fa-circle-o"></i> <span>Transportasi Laut</span>
                    <span class="pull-right-container">
                    </span>
                  </a>
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
