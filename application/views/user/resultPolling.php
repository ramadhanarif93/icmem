        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Result Polling</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <?php
                            $d = '%Y-%m-%d';
                            $time = time();

                            $n1 = date("F , d Y", strtotime("-1 day"));
                            echo $n1;
                            ?>
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:800px;">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No.</th>
                                        <th>Question</th>
                                        <th>Polling A</th>
                                        <th>Polling B</th>
                                        <th>Polling C</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($polling as $dtPolling) {
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $no++; ?></td>
                                            <td><?= $dtPolling['question'] ?></td>
                                            <td><?= $dtPolling['answerA'] . " : " . $dtPolling['sumA']; ?></td>
                                            <td><?= $dtPolling['answerB'] . " : " . $dtPolling['sumB']; ?></td>
                                            <td><?= $dtPolling['answerC'] . " : " . $dtPolling['sumC']; ?></td>
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
        <!-- /.container-fluid -->

        <!-- -->

        </div>
        <!-- End of Main Content -->