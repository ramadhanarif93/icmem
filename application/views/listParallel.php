        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Room Parallel</h1>

                <!-- Button trigger modal -->
                <a href="<?= base_url('Room/addRoomParallel') ?>" class="btn btn-primary btn-sm">
                    Add Room Parallel
                </a>
            </div>
            <!-- Content Row -->

            <div class="row">
                <div class="col-xl-12 col-md">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Room Parallel</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" style="font-size: 12px;" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Session</th>
                                            <th>Speaker Name</th>
                                            <th>Session Chair Name</th>
                                            <th>Schedule</th>
                                            <th>Participant</th>
                                            <th>Link Recording</th>
                                            <th>Link Google Meet</th>
                                            <th>Status Link Google Meet</th>
                                            <th width="25%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($meeting as $dtMeeting) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?= $no++; ?></td>
                                                <td><?= $dtMeeting['kodeSession'] ?></td>
                                                <td><?= $dtMeeting['speakername']; ?></td>
                                                <td><?= $dtMeeting['chairname']; ?></td>
                                                <td><?= $dtMeeting['meetingDate'] . " - " . date_format(date_create($dtMeeting['meetingTimeStart']), "H:i"); ?></td>
                                                <td><?= $dtMeeting['participant'] ?></td>
                                                <td><?= $dtMeeting['linkRec'] ?></td>
                                                <td><?= $dtMeeting['meet'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($dtMeeting['meetStatus'] == "1") {
                                                        echo "Active";
                                                    } elseif ($dtMeeting['meetStatus'] == "0") {
                                                        echo "Deactive";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('Room/editParallel/' . $dtMeeting['idParallel']) ?>" class="btn btn-info btn-sm m-2">Edit</a>
                                                    <form action="<?= base_url('Room/parallelDetail/'); ?>" method="post">
                                                        <input type="hidden" name="session" value="<?= $dtMeeting['kodeSession']; ?>">
                                                        <button type="submit" class="btn btn-info btn-sm m-2">Detail</button>
                                                    </form>
                                                    <a href="<?= base_url('Room/seeParticipant/' . $dtMeeting['idParallel']); ?>" class="btn btn-success btn-sm m-2">Participant</a>
                                                    <a href="#" data-toggle="modal" data-target="#turn<?= $dtMeeting['idParallel']; ?>" class="btn btn-warning btn-sm m-2">Turn On/Off Link Meet</a>
                                                    <a href="#" data-toggle="modal" data-target="#delete<?= $dtMeeting['idParallel']; ?>" class="btn btn-danger btn-sm m-2">Delete</a>

                                                    <div class="modal fade" id="turn<?= $dtMeeting['idParallel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Active or Deactive link google meet?
                                                                    <form method="POST" action="<?= base_url('Room/turn'); ?>">
                                                                        <select name="turn" id="">
                                                                            <option value="1">Activate</option>
                                                                            <option value="0">deactivate</option>
                                                                        </select>
                                                                        <input type="hidden" name="id" value="<?= $dtMeeting['idParallel']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                    <button type="submit" class="btn btn-primary">Yes</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="delete<?= $dtMeeting['idParallel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure delete this room?
                                                                    <form method="POST" action="<?= base_url('Room/deleteParallel'); ?>">
                                                                        <input type="hidden" name="id" value="<?= $dtMeeting['idParallel']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Don't Delete!</button>
                                                                    <button type="submit" class="btn btn-light">Yes, Delete!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
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