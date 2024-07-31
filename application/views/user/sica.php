        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Sica</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            Polling
                        </div>
                        <div class="card-body">
                            <?php
                            foreach ($polling as $dtPolling) {
                            ?>
                                <div class="card mb-2" style="width: auto;">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title">Question 1</h5> -->
                                        <p class="card-text"><?= $dtPolling['question']; ?></p>
                                        <form action="<?= base_url('Polling/inputPolling'); ?>" method="POST">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="A" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <?= $dtPolling['answerA']; ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="B">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    <?= $dtPolling['answerB']; ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="C">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    <?= $dtPolling['answerC']; ?>
                                                </label>
                                            </div>
                                            <input type="hidden" name="idPolling" value="<?= $dtPolling['idPolling']; ?>">
                                            <button type="submit" class="btn btn-sm btn-block btn-primary mt-2">Send</button>
                                        </form>
                                    </div>
                                    <div class="card-body bg-light">
                                        <!-- <canvas id="myChart" width="400" height="400"></canvas> -->
                                    </div>
                                </div>
                            <?php
                            } //end show polling
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card mb-4">
                        <div class="card-header">
                            Sica
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                foreach ($meeting as $dtMeeting) {
                                ?>
                                    <div class="col-6 ">
                                        <div class="card">
                                            <div class="card-body pl-4 pr-4">
                                                <a href="<?= base_url("Room/meeting/" . $dtMeeting['idMeeting']); ?>" style="text-decoration:none;">
                                                    <h5 class="card-title text-center text-dark" style="font-weight: 800;"><strong> <?= $dtMeeting['topic'] ?></strong></h5>
                                                    <p class="text-center text-dark ">
                                                        <img src="<?= base_url('assets/img/' . $dtMeeting['foto']);  ?>" class="img-thumbnail" style="margin: auto;" width="200px" height="100px" alt=""></p>
                                                    <p class="text-center text-dark p-0 m-0"><strong> <?= $dtMeeting['name'] ?></strong></p>
                                                </a>
                                                <p class="card-text p-0 m-0" style="font-size: 14px;">Category : <strong class="text-dark"> <?= $dtMeeting['category'] ?> </strong></p>
                                                <p class="card-text  p-0 m-0" style="font-size: 14px;">Schedule : <?= $dtMeeting['meetingDate'] . " - " . $dtMeeting['meetingTimeStart'] ?> </p>
                                                <p class="card-text  p-0 m-0" style="font-size: 14px;">Deskripsi : <?= $dtMeeting['description'] ?></p>
                                                <div class="row mt-2 d-flex justify-content-center">
                                                    <a href="<?= base_url("Room/meeting/" . $dtMeeting['idMeeting']); ?>" class="btn btn-sm btn-primary m-2">Join via Web</a>
                                                    <a href="<?= $dtMeeting['link']; ?>" class="btn btn-sm btn-info m-2">Join via Aplikasi</a>
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