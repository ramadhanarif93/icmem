        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">See Polling</h1>
                <button href="#" data-target="#addQuestion" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Question</button>
            </div>

            <!-- modal add question -->

            <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Question</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('Polling/add') ?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Date</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Question</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="question" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Answer A</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="answerA" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Answer B</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="answerB" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Answer C</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="answerC" required></textarea>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Polling</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Date</th>
                                            <th>Question</th>
                                            <th>Answer A</th>
                                            <th>Answer B</th>
                                            <th>Answer C</th>
                                            <th width="25%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($polling as $dtPolling) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td class="text-left"><?= $dtPolling['tanggal']; ?></td>
                                                <td><?= $dtPolling['question']; ?></td>
                                                <td>
                                                    <?= $dtPolling['answerA']; ?>
                                                    <form action="<?= base_url('Polling/listVotePolling'); ?>" method="post">
                                                        <input type="hidden" name="id" value="<?= $dtPolling['idPolling']; ?>">
                                                        <input type="hidden" name="answer" value="A">
                                                        <button type="submit" class="btn btn-info btn-sm mt-2">See Voter</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <?= $dtPolling['answerB']; ?>
                                                    <form action="<?= base_url('Polling/listVotePolling'); ?>" method="post">
                                                        <input type="hidden" name="id" value="<?= $dtPolling['idPolling']; ?>">
                                                        <input type="hidden" name="answer" value="B">
                                                        <button type="submit" class="btn btn-info btn-sm mt-2">See Voter</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <?= $dtPolling['answerC']; ?>
                                                    <form action="<?= base_url('Polling/listVotePolling'); ?>" method="post">
                                                        <input type="hidden" name="id" value="<?= $dtPolling['idPolling']; ?>">
                                                        <input type="hidden" name="answer" value="C">
                                                        <button type="submit" class="btn btn-info btn-sm mt-2">See Voter</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#result<?= $dtPolling['idPolling']; ?>" class="btn btn-info btn-sm">Result</a>
                                                    <a href="#" data-toggle="modal" data-target="#edit<?= $dtPolling['idPolling']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="#" data-toggle="modal" data-target="#delete<?= $dtPolling['idPolling']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                    <!-- start result polling -->
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="result<?= $dtPolling['idPolling']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Result</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col"><?= $dtPolling['answerA']; ?></th>
                                                                                <th scope="col"><?= $dtPolling['answerB']; ?></th>
                                                                                <th scope="col"><?= $dtPolling['answerC']; ?></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?= $dtPolling['sumA']; ?></td>
                                                                                <td><?= $dtPolling['sumB']; ?></td>
                                                                                <td><?= $dtPolling['sumC']; ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end result polling -->

                                                    <!-- start polling modal edit -->
                                                    <div class="modal fade" id="edit<?= $dtPolling['idPolling']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="<?= base_url('Polling/edit'); ?>">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlInput1">Date</label>
                                                                            <input type="date" class="form-control" name="date" value="<?= $dtPolling['tanggal']; ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Question</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="question" required><?= $dtPolling['question']; ?>
                                                                            </textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Answer A</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="answerA" required><?= $dtPolling['answerA']; ?>
                                                                            </textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Answer B</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="answerB" required><?= $dtPolling['answerB']; ?>
                                                                            </textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Answer C</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="answerC" required><?= $dtPolling['answerC']; ?>
                                                                            </textarea>
                                                                        </div>

                                                                        <input type="hidden" name="id" value="<?= $dtPolling['idPolling']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end polling modal edit -->

                                                    <!-- start polling modal delete -->
                                                    <div class="modal fade" id="delete<?= $dtPolling['idPolling']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confrim</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure to delete this Question?
                                                                    <form method="POST" action="<?= base_url('Polling/delete'); ?>">
                                                                        <input type="hidden" name="id" value="<?= $dtPolling['idPolling']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Don't Delete!</button>
                                                                    <button type="submit" class="btn btn-light">Ya, I Sure!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end polling modal delete -->

                                                </td>
                                            </tr>
                                        <?php
                                        } // end show polling 
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