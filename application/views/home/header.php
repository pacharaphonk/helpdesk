<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Help Desk System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php echo link_tag('asset/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>
  <!-- Font Awesome -->
   <?php echo link_tag('asset/bower_components/font-awesome/css/font-awesome.min.css'); ?>
  <!-- Ionicons -->
   <?php echo link_tag('asset/bower_components/Ionicons/css/ionicons.min.css'); ?>
  <!-- DataTables -->
   <?php echo link_tag('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>
  <!-- Theme style -->
   <?php echo link_tag('asset/dist/css/AdminLTE.min.css'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?php echo link_tag('asset/dist/css/skins/_all-skins.min.css'); ?>
  
<!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>asset/dist/js/app.min.js" type="text/javascript">
    </script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
        <!-- ckeditor-->
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
    .fr{color: red;}

    .bt{margin-left: ;}
    .responsive {
      width: 100%;
      max-width: 450px;
      height: auto;
    } 
    </style>

    
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php //echo $mylink;?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Help</b>Desk</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Help</b>Desk</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user"></span>
              <span class="hidden-xs"></span>
            </a>
            
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
         <br><br>
        </div>
        <div class="pull-left info">

          <p><span class="glyphicon glyphicon-user"></span> HelpDesk</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          <li><a href="<?= site_url('');?>"><i class="fa fa-home"></i> <span>HOME</span></a></li>
          <li><a href="<?= site_url('form');?>"><i class="fa fa-home"></i> <span>แจ้งงานซ่อม</span></a></li>
          <li><a href="<?= site_url('form/allcase');?>"><i class="fa fa-desktop"></i> <span>ติดตามงาน</span></a></li>
          <li><a href="<?= site_url('login');?>"><i class="fa fa-edit"></i> <span>Login</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>