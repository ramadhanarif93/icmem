        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            Change Password
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:800px;">
                            <div class="row">
                                <div class="col-12">
                                    <?= $this->session->flashdata('message'); ?>
                                    <form method="POST" action="<?= base_url('Auth/changePassword'); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="text" class="form-control" value="<?= $this->session->userdata('username') ?>" name="username" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Old Password</label>
                                            <input type="password" class="form-control" name="passwordLama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">New Password</label>
                                            <input type="password" class="form-control" name="passwordBaru1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Confirm New Password</label>
                                            <input type="password" class="form-control" name="passwordBaru2" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mt-5">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

        <!-- -->