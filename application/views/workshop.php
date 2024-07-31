        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Workshop</h1>
                <button href="#" data-target="#addQuestion" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Workshop</button>
            </div>

            <!-- modal add question -->

            <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Workshop</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('Workshop/add') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Logo</label>
                                    <input type="file" class="form-control" name="workshop" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Company</label>
                                    <input type="text" class="form-control" name="company" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Hyperlink</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="hyperlink" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Workshop</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Logo</th>
                                            <th>Company</th>
                                            <th>Hyperlink</th>
                                            <th>Description</th>
                                            <th width="25%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($workshop as $dtWorkshop) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td><img src="<?= base_url('assets/img/' . $dtWorkshop['logo']); ?>" class="img-thumbnail" width="200px" alt=""></td>
                                                <td><?= $dtWorkshop['company'] ?></td>
                                                <td><?= $dtWorkshop['hyperlink']; ?></td>
                                                <td><?= $dtWorkshop['description']; ?></td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit<?= $dtWorkshop['idWorkshop']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="#" data-toggle="modal" data-target="#delete<?= $dtWorkshop['idWorkshop']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                    <!-- start Workshop modal edit -->
                                                    <div class="modal fade" id="edit<?= $dtWorkshop['idWorkshop']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="<?= base_url('Workshop/edit'); ?>" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Logo</label>
                                                                            <input type="file" class="form-control" name="logo">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Company</label>
                                                                            <input type="text" class="form-control" value="<?= $dtWorkshop['company'] ?>" name="company" required>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Time Start</label>
                                                                            <input type="time" name="timeStart" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $dtWorkshop['meetingTimeStart']; ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Time End</label>
                                                                            <input type="time" name="timeEnd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $dtWorkshop['meetingTimeEnd'] ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Hyperlink</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="hyperlink" required><?= $dtWorkshop['hyperlink']; ?></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required><?= $dtWorkshop['description'] ?></textarea>
                                                                        </div>
                                                                        <input type="hidden" name="id" value="<?= $dtWorkshop['idWorkshop']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Workshop modal edit -->

                                                    <!-- start Workshop modal delete -->
                                                    <div class="modal fade" id="delete<?= $dtWorkshop['idWorkshop']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confrim</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure to delete this Workshop?
                                                                    <form method="POST" action="<?= base_url('Workshop/delete'); ?>">
                                                                        <input type="hidden" name="id" value="<?= $dtWorkshop['idWorkshop']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Don't Delete!</button>
                                                                    <button type="submit" class="btn btn-light">Ya, I Sure!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Workshop modal delete -->

                                                </td>
                                            </tr>
                                        <?php
                                        } // end show Workshop 
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