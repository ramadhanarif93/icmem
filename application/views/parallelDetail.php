        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Session</h1>
            </div> <!-- Content Row -->

            <div class="row">
                <div class="col-xl-12 col-md">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Session</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($session as $dtSession) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td><?= $dtSession['idpapper']; ?></td>
                                                <td class="text-left"><?= $dtSession['title']; ?></td>
                                                <td><?= $dtSession['author']; ?></td>
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