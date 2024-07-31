        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Support</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            Support
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:700px;">
                            <div class="row">
                                <?php
                                foreach ($meeting as $dtMeeting) {
                                ?>
                                    <div class="col-12 text-center mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-body pl-4 pr-4">
                                                <p class="text-center text-dark ">
                                                    <img src="<?= base_url('assets/img/' . $dtMeeting['foto']);  ?>" class="img-thumbnail" style="margin: auto;" width="200px" height="100px" alt=""></p>
                                                <a href="<?= base_url("Room/meeting/" . $dtMeeting['idMeeting']); ?>" style="text-decoration:none;" target="_blank">
                                                    <h5 class="card-title text-center text-dark" style="font-weight: 800;"><strong> <?= $dtMeeting['topic'] ?></strong></h5>
                                                    <p class="text-center text-dark p-0 m-0"><strong> <?= $dtMeeting['name'] ?></strong></p>
                                                </a>
                                                <p class="card-text  p-0 m-0" style="font-size: 12px;"><?= $dtMeeting['meetingTimeStart'] . " - " . $dtMeeting['meetingTimeEnd']; ?> </p>
                                                <p class="card-text  p-0 m-0" style="font-size: 12px;">Deskripsi : <?= $dtMeeting['description'] ?></p>
                                                <div class="row mt-2 d-flex justify-content-center">
                                                    <a href="<?= base_url("Room/meeting/" . $dtMeeting['idMeeting']); ?>" target="_blank" class="btn btn-sm btn-primary m-2">Join via Web</a>
                                                    <a href="<?= $dtMeeting['link']; ?>" target="_blank" class="btn btn-sm btn-info m-2">Join via Aplikasi</a>
                                                    <?php
                                                    if ($dtMeeting['meetStatus'] == "1") {
                                                    ?>
                                                        <a href="<?= $dtMeeting['meet']; ?>" target="_blank" class="btn btn-sm btn-info m-2">Join via Google Meet</a>
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

        </div>
        <!-- End of Main Content -->