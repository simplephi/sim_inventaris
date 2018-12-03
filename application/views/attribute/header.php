<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/select2/dist/css/select2.min.css">

  <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url();?>" class="logo">
      <span class="logo-mini"><b>S</b> Padu</span>
      <span class="logo-lg"><b>SIPADU</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="menu-icon fa fa-user"></i>
			<!-- <img class="nav-user-photo" src="<?php echo base_url()?>assets/avatars/user.jpg" alt="Jason's Photo" /> -->
              <!--img src="<?php echo base_url();?>assets/image/icon.png" class="user-image" alt="User Image"-->
              <span class="user-info">
              <small>Welcome,</small>
              <?php echo $this->session->userdata('user_fullname')?>
              </span>
              <i class="ace-icon fa fa-caret-down"></i>
			  <!--span class="hidden-xs">Administrator</span-->
            </a>
			<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li class="divider"></li>
                <li>
                  <a href="<?php echo site_url('home/logout')?>">
                  <i class="ace-icon fa fa-power-off"></i>
                  Logout
                  </a>
                </li>
              </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
