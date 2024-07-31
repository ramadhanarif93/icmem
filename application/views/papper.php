        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Papper</h1>

                <!-- Button trigger modal -->
                <a href="#" data-target="#addPapper" data-toggle="modal" class="btn btn-primary btn-sm">
                    Add Papper
                </a>

                <!-- Modal -->
                <div class="modal fade" id="addPapper" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Papper</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('Room/addPapper'); ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" name="judulPapper">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Author</label>
                                        <input type="text" class="form-control" name="presenter">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sesi</label>
                                        <input type="text" class="form-control" name="sesi">
                                        <select name="sesi" id="" class="form-control">
                                            <?php

                                            ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- Content Row -->

            <div class="row">
                <div class="col-xl-12 col-md">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Papper</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Sesi</th>
                                            <th width="25%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($papper as $dtPapper) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td><?= $dtPapper['judulPapper']; ?></td>
                                                <td><?= $dtPapper['presenter']; ?></td>
                                                <td><?= $dtPapper['sesi']; ?></td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit<?= $dtPapper['idPapper']; ?>" class="btn btn-info btn-sm">Edit</a>
                                                    <a href="#" data-toggle="modal" data-target="#delete<?= $dtPapper['idPapper']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                    <div class="modal fade" id="edit<?= $dtPapper['idPapper']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Papper</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="<?= base_url('Room/editPapper'); ?>" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Title</label>
                                                                            <input type="text" class="form-control" name="judulPapper" value="<?= $dtPapper['judulPapper'] ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Author</label>
                                                                            <input type="text" class="form-control" name="presenter" value="<?= $dtPapper['presenter'] ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Session</label>
                                                                            <input type="text" class="form-control" name="sesi" value="<?= $dtPapper['sesi'] ?>">
                                                                        </div>
                                                                        <input type="hidden" name="id" value="<?= $id ?>">
                                                                        <input type="hidden" name="idPapper" value="<?= $dtPapper['idPapper'] ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="delete<?= $dtPapper['idPapper']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure delete this papper?
                                                                    <form method="POST" action="<?= base_url('Room/deletePapper'); ?>">
                                                                        <input type="hidden" name="id" value="<?= $dtPapper['idPapper']; ?>">
                                                                        <input type="hidden" name="id" value="<?= $id; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Don't Delete!</button>
                                                                    <button type="submit" class="btn btn-light">Yes, Delete!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        <!-- Modal -->
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