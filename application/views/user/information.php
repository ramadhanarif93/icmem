        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Information Center</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            Information Center
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:700px;">
                            <div class="row">
                                <?php
                                foreach ($meeting as $dtMeeting) {
                                ?>
                                    <div class="col-12 text-center">
                                        <div class="card mb-4">
                                            <div class="card-body pl-4 pr-4">
                                                <p class="text-center text-dark ">
                                                    <img src="<?= base_url('assets/img/' . $dtMeeting['foto']);  ?>" class="img-thumbnail" style="margin: auto;" width="200px" height="100px" alt=""></p>
                                                <a href="<?= base_url("Room/meeting/" . $dtMeeting['idMeeting']); ?>" style="text-decoration:none;">
                                                    <p class="card-title text-center text-dark" style="font-size:14px;font-weight: 800;"><strong> <?= $dtMeeting['topic'] ?></strong></p>
                                                    <p class="text-center text-dark p-0 m-0"><strong> <?= $dtMeeting['name'] ?></strong></p>
                                                </a>
                                                <p class="card-text  p-0 m-0" style="font-size: 12px;"><?= $dtMeeting['meetingTimeStart'] . " - " . $dtMeeting['meetingTimeEnd']; ?></p>
                                                <a href="<?= base_url("Room/meeting/" . $dtMeeting['idMeeting']); ?>" target="_blank" class="btn btn-sm btn-primary m-2">Join via Zoom Website</a>
                                                <form action="<?= base_url('Room/joinAnother'); ?>" method="post" target="_blank">
                                                    <input type="hidden" name="id" value="<?= $dtMeeting['idMeeting']; ?>">
                                                    <input type="hidden" name="link" value="<?= $dtMeeting['link']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-info m-2">Join via Aplikasi</button>
                                                </form>
                                                <?php
                                                if ($dtMeeting['meetStatus'] == "1") {
                                                ?>
                                                    <form action="<?= base_url('Room/joinAnother'); ?>" method="post" target="_blank">
                                                        <input type="hidden" name="id" value="<?= $dtMeeting['idMeeting']; ?>">
                                                        <input type="hidden" name="link" value="<?= $dtMeeting['link']; ?>">
                                                        <button type="submit" class="btn btn-sm btn-warning m-2">Join via Google Meet</button>
                                                    </form>
                                                <?php
                                                }
                                                ?>
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

        </div>
        <!-- End of Main Content -->