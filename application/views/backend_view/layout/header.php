<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.2.0.min.js')?>"></script>
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
          <li class="dropdown navbar-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bookmark fa-lg"></i>
              <span class="badge">4</span>
            </a>
            <ul class="dropdown-menu box task">
              <li><div class="up-arrow"></div></li>
              <li>
                <p>You have 4 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="task-desc">Database Migration</div>
                    <div class="task-percent">20%</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="task-desc">Mobile Development</div>
                    <div class="task-percent">45%</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                      <span class="sr-only">45% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="task-desc">App Deployment</div>
                    <div class="task-percent">80%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="task-desc">Server Upgrade</div>
                    <div class="task-percent">90%</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="footer">
                <a href="#">See all tasks</a>
              </li>
            </ul>
          </li>
          <li class="dropdown navbar-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope fa-lg"></i>
              <span class="badge">3</span>
            </a>
            <ul class="dropdown-menu box inbox">
              <li><div class="up-arrow"></div></li>
              <li>
                <p>You have 3 new messages</p>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img src= "<?php echo base_url().'assets/image/'.$this->session->userdata('image'); ?>" alt="User Image"></span>
                  <span class="subject">
                    <span class="from">Elaine Hernandez</span>
                    <span class="time">1 min</span>
                    <span class="message">Hey, are you there?</span>
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img src= "<?php echo base_url().'assets/image/'.$this->session->userdata('image'); ?>" alt="User Image"></span>
                  <span class="subject">
                    <span class="from">Larry Gardner</span>
                    <span class="time">5 mins</span>
                    <span class="message">Have you finished your work?</span>
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img src= "<?php echo base_url().'assets/image/'.$this->session->userdata('image'); ?>" alt="User Image"></span>
                  <span class="subject">
                    <span class="from">Tanya Mackenzie</span>
                    <span class="time">2 hrs</span>
                    <span class="message">Don't forget to attend today's...</span>
                  </span>
                </a>
              </li>
              <li class="footer">
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <li class="dropdown navbar-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell fa-lg"></i>
              <span class="badge">4</span>
            </a>
            <ul class="dropdown-menu box notification">
              <li><div class="up-arrow"></div></li>
              <li>
                <p>You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-user text-blue"></i> New user registered<span class="time pull-right">5 mins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-database text-green"></i> Database overloaded <span class="time pull-right">20 mins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-wrench text-yellow"></i> Application error <span class="time pull-right">1 hr</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-tasks text-red"></i> Server not responding <span class="time pull-right">5 hrs</span>
                </a>
              </li>
              <li class="footer">
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <li class="dropdown profile-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-cog fa-lg"></i>
              <span class="username">Me</span>
              <i class="caret"></i>
            </a>
            <ul class="dropdown-menu box profile">
              <li><div class="up-arrow"></div></li>
              <li class="border-top">
                <a href="pages-user.html"><i class="fa fa-user"></i>My Account</a>
              </li>
              <li>
                <a href="<?php echo base_url('login_controller/logout'); ?>"><i class="fa fa-power-off"></i>Log Out</a>
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
            <img src= "<?php echo base_url().'assets/image/'.$this->session->userdata('image'); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('email'); ?></p>
            <span><?php echo $this->session->userdata('level'); ?></span>
          </div>
        </div>
        <ul class="sidebar-menu">
          <li class="active">
            <a href="<?php echo base_url('backend_controller/dashboard_controller/dashboard_user')?>">
              <i class="fa fa-home"></i><span>Dashboard</span>
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









