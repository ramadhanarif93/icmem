        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Exhibition</h1>
                <button href="#" data-target="#addQuestion" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Exhibition</button>
            </div>

            <!-- modal add question -->

            <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Exhibition</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('Exhi/add') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Image</label>
                                    <input type="file" class="form-control" name="logo" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                                </div>

                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Time Start</label>
                                    <input type="time" name="timeStart" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Time End</label>
                                    <input type="time" name="timeEnd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Instagram</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="instagram"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Youtube</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="youtube"></textarea>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Exhibition</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <!-- <th>Time</th> -->
                                            <th>Description</th>
                                            <th>Instagram</th>
                                            <th>Youtube</th>
                                            <th width="25%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($exhi as $dtExhi) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td><img src="<?= base_url('assets/img/' . $dtExhi['logo']); ?>" class="img-thumbnail" width="200px" alt=""></td>
                                                <td><?= $dtExhi['title']; ?></td>
                                                <!-- <td><?= $dtExhi['meetingTimeStart'] . "-" . $dtExhi['meetingTimeEnd']; ?></td> -->
                                                <td><?= $dtExhi['description']; ?></>
                                                <td><?= $dtExhi['instagram']; ?></td>
                                                <td><?= $dtExhi['youtube']; ?></td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit<?= $dtExhi['idExhi']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="#" data-toggle="modal" data-target="#delete<?= $dtExhi['idExhi']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                    <!-- start Info modal edit -->
                                                    <div class="modal fade" id="edit<?= $dtExhi['idExhi']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="<?= base_url('Exhi/edit'); ?>" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Image</label>
                                                                            <input type="file" class="form-control" name="logo" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Title</label>
                                                                            <input type="text" class="form-control" name="title" value="<?= $dtExhi['title']; ?>" required>
                                                                        </div>

                                                                        <!-- <div class="form-group">
                                                                            <label for="exampleInputEmail1">Time Start</label>
                                                                            <input type="time" name="timeStart" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $dtExhi['meetingTimeStart']; ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Time End</label>
                                                                            <input type="time" name="timeEnd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $dtExhi['meetingTimeEnd'] ?>">
                                                                        </div> -->
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required><?= $dtExhi['description']; ?></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Instagram</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="instagram"><?= $dtExhi['instagram']; ?></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Youtube</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="youtube"><?= $dtExhi['youtube']; ?></textarea>
                                                                        </div>

                                                                        <input type="hidden" name="id" value="<?= $dtExhi['idExhi']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Info modal edit -->

                                                    <!-- start Info modal delete -->
                                                    <div class="modal fade" id="delete<?= $dtExhi['idExhi']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confrim</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure to delete this Exhibition?
                                                                    <form method="POST" action="<?= base_url('Exhi/delete'); ?>">
                                                                        <input type="hidden" name="id" value="<?= $dtExhi['idExhi']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Don't Delete!</button>
                                                                    <button type="submit" class="btn btn-light">Ya, I Sure!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Info modal delete -->

                                                </td>
                                            </tr>
                                        <?php
                                        } // end show Info 
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