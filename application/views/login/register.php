<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Website - ISCEM Zoom</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center mt-5">

      <div class="col-xl-6 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg mt-2">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Daftar Akun</h1>
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form action="<?= base_url('Auth/nambih'); ?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username / Email</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password1">
                      <small id="emailHelp" class="form-text text-muted">Minimal 3 Karakter.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Konfirmasi Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password2">
                      <small id="emailHelp" class="form-text text-muted">Masukan kembali Password.</small>
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <select name="role_id" id="" class="form-control">
                        <!-- <option value="1">Admin</option> -->
                        <option value="2">Member</option>

                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>