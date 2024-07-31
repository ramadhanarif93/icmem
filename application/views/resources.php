        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Resources</h1>
                <button href="#" data-target="#addQuestion" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Resources</button>
            </div>

            <!-- modal add question -->

            <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Resources</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('Resources/add') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Resources</label>
                                    <input type="file" class="form-control" name="resources">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Other Link</label>
                                    <textarea name="link" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end modal add question -->
            <!-- Content Row -->

            <div class="row">
                <div class="col-xl-12 col-md">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Resources</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Resources</th>
                                            <th>Link</th>
                                            <th width="25%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($resources as $dtResources) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td><?= $dtResources['title'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('assets/file/' . $dtResources['resources']) ?>" download="<?= $dtResources['resources'] ?>"><?= $dtResources['resources'] ?></a>
                                                </td>
                                                <td><a href="<?= $dtResources['link'] ?>" target="_blank"><?= $dtResources['link'] ?></a></td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit<?= $dtResources['idResources']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="#" data-toggle="modal" data-target="#delete<?= $dtResources['idResources']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                    <!-- start Resources modal edit -->
                                                    <div class="modal fade" id="edit<?= $dtResources['idResources']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="<?= base_url('Resources/edit'); ?>" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Title</label>
                                                                            <input type="text" class="form-control" name="title" value="<?= $dtResources['title'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Resources</label>
                                                                            <input type="file" class="form-control" value="<?= $dtResources['resources'] ?>" name="resources" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Other Link</label>
                                                                            <textarea name="link" id="" cols="30" rows="3" class="form-control"><?= $dtResources['link'] ?></textarea>
                                                                        </div>
                                                                        <input type="hidden" name="id" value="<?= $dtResources['idResources']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Resources modal edit -->

                                                    <!-- start Resources modal delete -->
                                                    <div class="modal fade" id="delete<?= $dtResources['idResources']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confrim</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure to delete this Resources?
                                                                    <form method="POST" action="<?= base_url('Resources/delete'); ?>">
                                                                        <input type="hidden" name="id" value="<?= $dtResources['idResources']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Don't Delete!</button>
                                                                    <button type="submit" class="btn btn-light">Ya, I Sure!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Resources modal delete -->

                                                </td>
                                            </tr>
                                        <?php
                                        } // end show Resources 
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