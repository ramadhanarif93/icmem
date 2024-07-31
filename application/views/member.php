        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Member</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Member</a>
          </div>
          <!-- Content Row -->

          <div class="row">
            <div class="col-xl-12 col-md">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <?= $this->session->flashdata('message'); ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th width="25%">#</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($member as $dtMember) {
                        ?>
                          <tr class="text-center">
                            <th><?= $no++; ?></th>
                            <th class="text-left"><?= $dtMember['name'] ?></th>
                            <th class="text-left"><?= $dtMember['username'] ?></th>
                            <td>
                              <a href="#" data-toggle="modal" data-target="#change<?= $dtMember['idUser'] ?>" class="btn btn-warning btn-sm">Reset or Change Password</a>
                            </td>
                          </tr>



                          <!-- Modal -->
                          <div class="modal fade" id="change<?= $dtMember['idUser'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Reset or Change Password</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="<?= base_url('Member/changePassword'); ?>">
                                    <input type="hidden" name="id" value="<?= $dtMember['idUser']; ?>">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">New Password</label>
                                      <input type="password" class="form-control" name="passwordBaru1" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Confirm New Password</label>
                                      <input type="password" class="form-control" name="passwordBaru2" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-light">Save</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->