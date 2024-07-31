        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Plenary Session</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            Plenary Session (Western Indonesian Time, GMT +7)
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:700px;">
                            <div class="row">
                               <!-- This feature will be available on August 3rd, 2020-->
                                <?php
                                foreach ($meeting as $dtMeeting) {
                                ?>
                                    <div class="col-12 text-center mt-3 mb-3">
                                        <div class="card">
                                            <div class="card-body pl-4 pr-4">
                                                <p class="text-center text-dark ">
                                                    <img src="<?= base_url('assets/img/' . $dtMeeting['foto']);  ?>" class="img-thumbnail" style="margin: auto;" width="200px" height="100px" alt=""></p>
                                                <p class=" card-title text-center text-dark m-0 p-0" style="font-weight:800;color:black;"><?= $dtMeeting['topic'] ?></p>
                                                <p class="card-text p-0"><?= date_format(date_create($dtMeeting['meetingTimeStart']), "H:i") . " - " . date_format(date_create($dtMeeting['meetingTimeEnd']), "H:i"); ?> </p>

                                                <p class="text-center m-0"><?= $dtMeeting['name'] ?></p>
                                                <p class="text-center m-0"><?= $dtMeeting['description'] ?></p>
                                                <div class="row mt-2 d-flex justify-content-center align-items-end">
                                                    <?php
                                                    if ($dtMeeting['meetStatus'] == "1") {
                                                    ?>
                                                        <form action="<?= base_url('Room/joinAnother'); ?>" method="post" target="_blank">
                                                            <input type="hidden" name="id" value="<?= $dtMeeting['idMeeting']; ?>">
                                                            <input type="hidden" name="link" value="<?= $dtMeeting['link']; ?>">
                                                            <button type="submit" class="btn btn-sm btn-warning m-2">Join via Google Meet</button>
                                                        </form>
                                                        <?php
                                                    } else {
                                                        if ($dtMeeting['meetingID'] != "") {
                                                        ?>
                                                            <a href="<?= base_url("Room/meeting/" . $dtMeeting['idMeeting']); ?>" target="_blank" class="btn btn-sm btn-primary m-2">Join via Zoom Website</a>
                                                        <?php
                                                        }
                                                        ?>
                                                        <form action="<?= base_url('Room/joinAnother'); ?>" method="post" target="_blank">
                                                            <input type="hidden" name="id" value="<?= $dtMeeting['idMeeting']; ?>">
                                                            <input type="hidden" name="link" value="<?= $dtMeeting['link']; ?>">
                                                            <button type="submit" class="btn btn-sm btn-info m-2">Join via Zoom Application</button>
                                                        </form>
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