<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SBM ITB Conference</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<div class="p-2" style="height: 20%; background-color: white; width: 100%">
  <div style="margin-left: 27%;">
    <img src="http://icmem.webtestingarif.online/assets/img/logo_icm.png" class="ml-4" width="150px" alt="">
    <img src="http://icmem.webtestingarif.online/assets/img/logo/igc.png" class="ml-4" width="150px" alt="">
    <img src="http://icmem.webtestingarif.online/assets/img/logo/sica.jpg" class="ml-4" width="180px" alt="">
    <img width="150px" src="http://icmem.webtestingarif.online/assets/img/logo.png" class="ml-4" alt="">
    <img src="http://icmem.webtestingarif.online/assets/img/logo_100.png" class="ml-4" width="60px" alt="">
  </div>
</div>

<body class="bg-gradient-dark" style="max-height: 800px !important;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center mt-5">

      <div class="col-xl-5 col-lg-5 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg mt-3">
                <div class="p-3">
                  <div class="text-center">
                    <img width="200px" class="mb-4" src="<?= base_url('assets/img/logo.png') ?>" alt="">
                    <!-- <h1 class="h4 text-gray-900 mb-4">Login</h1> -->
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form class="user" method="POST" action="<?= base_url('Auth/login') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control" name="username" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Insert Username/Email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Insert Password">
                    </div>
                    <div class="form-group">
                      <!-- <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div> -->
                    </div>
                    <button type="submit" href="index.html" class="btn btn-info btn-block mb-3">
                      <i class="fa fa-sign-in-alt"> </i> Login
                    </button>
                  </form>
                  <!-- <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



  <footer class="sticky-footer bg-white p-2" style="position: relative; margin-top: 17.5%; width: 100%;">
    <!-- <div class="copyright my-auto text-right">
      <span>Copyright &copy; 2020 SBM ITB</span>
    </div> -->
    <div class="row ">
      <div class="col-12 text-center mt-1">
        <p class="p-0 m-0">Partner & Media Partner</p>
        <img src="<?= base_url('assets/img/partner/1.jpg') ?>" class="ml-2" width="100px" alt="">
        <img src="<?= base_url('assets/img/partner/2.jpg') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/3.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/4.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/5.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/6.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/7.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/8.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/9.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/10.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/11.png') ?>" class="ml-2" width="75px" alt="">
        <img src="<?= base_url('assets/img/partner/12.png') ?>" class="ml-2" width="75px" alt="">

      </div>
      <div class="col-12 text-right pr-4 pb-1">
        <span>Copyright &copy; 2020 SBM ITB</span>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>