<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta http-equiv="refresh" content="600">
  <meta name="author" content="">

  <title>SBM ITB Conference</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.8/css/bootstrap.css" />
  <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.8/css/react-select.css" />
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->

</head>

<body id="page-top" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3"><img width="200px" src="<?= base_url('assets/img/logo.png') ?>" alt=""></div>
      </a> -->

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active mt-3">
        <a class="nav-link" href="<?= base_url('Dashboard') ?>">
          <img src="<?= base_url('assets/img/home.png') ?>" width="15px" height="15px" alt="" srcset="">
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <?php
      if ($this->session->userdata('role_id') == '1') {
      ?>
        <!-- Heading -->
        <div class="sidebar-heading">
          Data
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room') ?>">
            <i class="fas fa-video"></i>
            <span>Room</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room/listParallel') ?>">
            <i class="fas fa-video"></i>
            <span>Room Parallel</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Member') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Member</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Polling') ?>">
            <i class="fas fa-poll"></i>
            <span>Polling</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('info') ?>">
            <i class="fas fa-info"></i>
            <span>Announcement</span></a>
        </li>



        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Exchibition') ?>">
            <i class="fas fa-video"></i>
            <span>Fun Workshop</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Exhi') ?>">
            <i class="fas fa-video"></i>
            <span>Exhibition</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Resources') ?>">
            <i class="fas fa-file"></i>
            <span>Resources</span></a>
        </li>
      <?php
      } elseif ($this->session->userdata('role_id') == '2') {
      ?>

        <!-- Heading -->
        <div class="sidebar-heading">
          Event
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room/planary') ?>">
            <img src="<?= base_url('assets/img/plenary.png') ?>" width="15px" height="15px" alt="" srcset="">
            <span>Plenary Session</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room/paralel') ?>">
            <img src="<?= base_url('assets/img/parallel.png') ?>" width="15px" height="15px" alt="" srcset="">
            <span>Parallel Session</span></a>
        </li>



        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room/workshop') ?>">
            <img src="<?= base_url('assets/img/workshop.png') ?>" width="15px" height="15px" alt="" srcset="">
            <span>Workshop & Coaching</span></a>
        </li>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room/exchibition') ?>">
            <img src="<?= base_url('assets/img/workshop.png') ?>" width="15px" height="15px" alt="" srcset="">
            <span>Fun Workshop & Exhibition</span></a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <!-- Heading -->
        <div class="sidebar-heading">
          Support
        </div>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room/presentation') ?>">
            <img src="<?= base_url('assets/img/parallel.png') ?>" width="15px" height="15px" alt="" srcset="">
            <span>Presentation Schedule</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room/resources') ?>">
            <i class="fas fa-file"></i>
            <span>Resources</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Room/information') ?>">
            <img src="<?= base_url('assets/img/qna.png') ?>" width="15px" height="15px" alt="" srcset="">
            <span>Information Center</span></a>
        </li>




      <?php  }

      ?>
      <!-- Nav Item - Tables -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Auth/logout') ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button> -->

          <!-- Topbar Search -->
          <img src="<?= base_url('assets/img/logo_icm.png') ?>" class="ml-4" width="150px" alt="">
          <img src="<?= base_url('assets/img/logo/igc.png') ?>" class="ml-4" width="150px" alt="">
          <img src="<?= base_url('assets/img/logo/sica.jpg') ?>" class="ml-4" width="190px" alt="">
          <img width="150px" src="<?= base_url('assets/img/logo.png') ?>" class="ml-4" alt="">
          <img src="<?= base_url('assets/img/logo_100.png') ?>" class="ml-4" width="60px" alt="">





          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('username') ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('Auth/changePassword') ?>">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <a class="dropdown-item" href="<?= base_url('Auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->