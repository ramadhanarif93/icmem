        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Resources</h1>

            </div>



            <!-- end modal add question -->
            <!-- Content Row -->

            <div class="row">
                <div class="col-xl-12 col-md">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Resources</h6>
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:700px;">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Resources</th>
                                            <th>Link</th>
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
                                                <td>
                                                    <?php
                                                    if ($dtResources['link'] == "") {
                                                        echo "-";
                                                    } else {
                                                        echo "<a href='" . $dtResources['link'] . "' target='_blank' class='btn btn-sm btn-warning' >Click Here</a>";
                                                    }

                                                    ?>
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