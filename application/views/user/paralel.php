        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Parallel Session</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            Parallel Session (Western Indonesian Time, GMT +7)
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:800px;">
                            <div class="row">
                                <?php
                                foreach ($parallel as $data) {
                                ?>
                                    <div class="col-6">
                                        <div class="card mb-4">
                                            <div class="card-body" style="overflow-y: scroll; height:600px;">
                                                <p class="text-center text-dark ">
                                                    <img src="<?= base_url('assets/img/' . $data['foto']);  ?>" class="img-thumbnail" style="margin: auto;" width="200px" height="100px" alt=""></p>
                                                <p class="text-center m-0" style="font-weight:800;color:black;"><?= $data['kodeSession']; ?></p>
                                                <p class="text-center"><?= date_format(date_create($data['meetingTimeStart']), "H:i") . " - " . date_format(date_create($data['meetingTimeEnd']), "H:i"); ?></p>
                                                <p class="text-center m-0">Stream : <?= $data['speakername']; ?></p>
                                                <p class="text-center m-0">Chaired by : <?= $data['chairname']; ?></p>
                                                <div class="sidebar-divider"></div>


                                                <?php
                                                $count = 0;
                                                foreach ($session as $dataSession) {
                                                    if ($dataSession['session'] == $data['kodeSession']) {
                                                        $count++;
                                                    }
                                                }

                                                if ($count > 0) {
                                                ?>

                                                    <table class="table table-sm table-bordered table-striped table-hover mt-2 text-xs" width="100%" cellspacing="0">
                                                        <thead class="table-dark text-center">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Title</th>
                                                                <th>Author</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($session as $dataSession) {
                                                                if ($dataSession['session'] == $data['kodeSession']) {
                                                            ?>
                                                                    <tr>
                                                                        <td class="text-center"><?= $dataSession['idpapper'] ?></td>
                                                                        <td><?= $dataSession['title'] ?></td>
                                                                        <td class="text-center"><?= $dataSession['author'] ?></td>
                                                                        <!--<td><?= date_format(date_create($data['meetingDate']), "Y-m-d"); ?></td>
                                                                        <td><?= date_format(date_create($data['meetingTimeStart']), "H:i") . " - " . date_format(date_create($data['meetingTimeEnd']), "H:i"); ?></td>-->
                                                                    </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                <?php
                                                }
                                                ?>
                                                <div class="row d-flex justify-content-center align-items-end">
                                                    <?php
                                                    if ($data['meetStatus'] == "1") {
                                                    ?>
                                                        <div class="col">
                                                            <form action="<?= base_url('Room/joinAnotherParallel'); ?>" method="post" target="_blank">
                                                                <input type="hidden" name="id" value="<?= $data['idMeeting']; ?>">
                                                                <input type="hidden" name="link" value="<?= $data['link']; ?>">
                                                                <button type="submit" class="btn btn-sm btn-warning">Join via Google Meet</button>
                                                            </form>
                                                        </div>
                                                    <?php
                                                    } else {
                                                        //if ($data['meetingID'] == "") {
                                                    ?>
                                                        <div class="col-4">
                                                            <a href="<?= base_url("Room/meetingParallel/" . $data['idParallel']); ?>" class="btn btn-sm btn-primary" target="_blank">Join via Zoom Website</a>
                                                        </div>
                                                        <?php
                                                        //}
                                                        ?>
                                                        <div class="col-4">
                                                            <form action="<?= base_url('Room/joinAnotherParallel'); ?>" method="post" target="_blank">
                                                                <input type="hidden" name="id" value="<?= $data['idParallel']; ?>">
                                                                <input type="hidden" name="link" value="<?= $data['link']; ?>">
                                                                <button type="submit" class="btn btn-sm btn-info">Join via Zoom Application</button>
                                                            </form>
                                                        </div>

                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

        <!-- -->