<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.0.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery.validationEngine.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery.validationEngine-en.js')?>"></script>
  <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/backend/dataTables.bootstrap.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/backend/jquery.gritter.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/backend/animate.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/backend/pace-theme-minimal.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/backend/main.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/backend/skins.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/backend/custom.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/validationEngine.jquery.css')?>" rel="stylesheet">
</head>
<body class="skin-dark">
  <header class="header" id="#head-nav-backend">
    <span href="index.html" class="logo">
      <big>DASHBOARD</big>
    </span>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="fa fa-bars fa-lg"></span>
      </a>
      <div class="navbar-right">
        <ul class="nav navbar-nav">
          <li class="profile-menu">
            <a href="<?php echo base_url('home/index'); ?>">
              <span class="username">Portal/Home</span>
            </a>
          </li>
          <li class="dropdown profile-menu">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-cog fa-lg"></i>
              <span class="username">Me</span>
              <i class="caret"></i>
            </a>
            <ul class="dropdown-menu box profile">
              <li><div class="up-arrow"></div></li>
              <li class="border-top">
                <a href="<?php echo base_url('backend/dashboard/my_profile'); ?>"><i class="fa fa-user"></i>My Account</a>
              </li>
              <li>
                <a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-power-off"></i>Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="wrapper row-offcanvas row-offcanvas-left">
    <aside class="left-side sidebar-offcanvas">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <?php 
            if ($this->session->userdata('image')=="") 
            {
              $myimage='team/1-290x290.jpg';
            }
            else
            {
              $myimage=$this->session->userdata('image');
            }

            ?>
            <img src= "<?php echo base_url().'assets/images/'.$myimage ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo "Username : ".$this->session->userdata('name'); ?></p>
            <span>
              <?php echo "Member ID : ".$this->session->userdata('member_id'); ?>
            </span>
          </div>
        </div>
        <ul class="sidebar-menu">
          <li class="active">
            <a href="<?php echo base_url('backend/dashboard/index')?>">
              <i class="fa fa-home"></i><span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('backend/user/index')?>">
              <i class="fa fa-user"></i><span>Users</span>
            </a>
          </li>
          <li class="menu">
            <a href="#">
              <i class="fa fa-folder-open"></i><span>News</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sub-menu">
              <li><a  href="<?php echo base_url('backend/news/insert/')?>">New</a></li>
              <li><a  href="<?php echo base_url('backend/news/index/')?>">List</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </aside>
    <aside class="right-side">
      <section class="content">
        <div class="row">
          <div class="col-md-12" id="content_backend_ajax" style="margin-top:25px;"></div>









