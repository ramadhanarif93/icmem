        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Fun Workshop & Exercises</h1>
                <button href="#" data-target="#addQuestion" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add</button>
            </div>

            <!-- modal add question -->

            <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('Exchibition/add') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Image</label>
                                    <input type="file" class="form-control" name="logo" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Category</label>
                                    <select name="category" id="" class="form-control">
                                        <option value="" disabled>--Choice Category--</option>
                                        <option value="Fun Workshop">Fun Workshop</option>
                                        <option value="Exercises">Exercises</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Embed</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="embed" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Fun Workshop & Exercises</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Embed</th>
                                            <th width="25%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($exchibition as $dtExchibition) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td><?= $dtExchibition['title'] ?></td>
                                                <td><img src="<?= base_url('assets/img/' . $dtExchibition['logo']); ?>" class="img-thumbnail" width="200px" alt=""></td>
                                                <td><?= $dtExchibition['category']; ?></td>
                                                <?= $dtExchibition['meetingTimeStart'] . "-" . $dtExchibition['meetingTimeEnd']; ?>
                                                <td><?= $dtExchibition['description']; ?></td>
                                                <td><?= $dtExchibition['embed']; ?></td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#edit<?= $dtExchibition['idExchibition']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="#" data-toggle="modal" data-target="#delete<?= $dtExchibition['idExchibition']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                    <!-- start Exchibition modal edit -->
                                                    <div class="modal fade" id="edit<?= $dtExchibition['idExchibition']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="<?= base_url('Exchibition/edit'); ?>" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Title</label>
                                                                            <input type="text" class="form-control" name="title" value="<?= $dtExchibition['title']; ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Image</label>
                                                                            <input type="file" class="form-control" name="logo" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Category</label>
                                                                            <select name="category" id="" class="form_control">
                                                                                <option value="
                                                                                <?= $dtExchibition['category']; ?>">
                                                                                    <?= $dtExchibition['category']; ?></option>
                                                                                <option value="" disabled>--Choice Category--</option>
                                                                                <option value="Fun Workshop">Fun Workshop</option>
                                                                                <option value="Exercises">Exercises</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required><?= $dtExchibition['description']; ?></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Embed</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="embed" required><?= $dtExchibition['embed'] ?></textarea>
                                                                        </div>
                                                                        <input type="hidden" name="id" value="<?= $dtExchibition['idExchibition']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Exchibition modal edit -->

                                                    <!-- start Exchibition modal delete -->
                                                    <div class="modal fade" id="delete<?= $dtExchibition['idExchibition']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confrim</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure to delete this Exchibition?
                                                                    <form method="POST" action="<?= base_url('Exchibition/delete'); ?>">
                                                                        <input type="hidden" name="id" value="<?= $dtExchibition['idExchibition']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Don't Delete!</button>
                                                                    <button type="submit" class="btn btn-light">Ya, I Sure!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Exchibition modal delete -->

                                                </td>
                                            </tr>
                                        <?php
                                        } // end show Exchibition 
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