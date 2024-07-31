        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Room</h1>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Add Room
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Choice Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('room/choice'); ?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select name="category" id="" class="form-control">
                                            <option value="">-- Category --</option>
                                            <option value="Plenary"> Plenary </option>
                                            <option value="Parallel"> Parallel </option>
                                            <option value="Information"> Information </option>
                                            <option value="Workshop & Coaching"> Workshop & Coaching </option>
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Input</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->

            <div class="row">
                <div class="col-xl-12 col-md">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Room</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message'); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Topic</th>
                                            <th>Name</th>
                                            <th>Schedule</th>
                                            <th>Category</th>
                                            <th>Link Google Meet</th>
                                            <th>Status Link Google Meet</th>
                                            <th width="30%">Description</th>
                                            <th>Participant</th>
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
                                                <td><img src="<?= base_url('assets/img/' . $dtMeeting['foto']); ?>" width="200" alt="" srcset=""></td>
                                                <td><?= $dtMeeting['topic']; ?></td>
                                                <td><?= $dtMeeting['name']; ?></td>
                                                <td><?= $dtMeeting['meetingDate'] . " - " . $dtMeeting['meetingTimeStart']; ?></td>
                                                <td><?= $dtMeeting['category'] ?></td>
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
                                                <td class="text-left"><?= $dtMeeting['description'] ?></td>
                                                <td><?= $dtMeeting['participant'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('Room/edit/' . $dtMeeting['idMeeting']); ?>" class="btn btn-info btn-sm">Edit</a>
                                                    <a href="<?= base_url('Room/seeParticipant/' . $dtMeeting['idMeeting']); ?>" class="btn btn-success btn-sm">Participant</a>
                                                    <a href="#" data-toggle="modal" data-target="#turn<?= $dtMeeting['idMeeting']; ?>" class="btn btn-warning btn-sm">Turn On/Off Link Meet</a>
                                                    <a href="#" data-toggle="modal" data-target="#delete<?= $dtMeeting['idMeeting']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                    <div class="modal fade" id="turn<?= $dtMeeting['idMeeting']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                        <input type="hidden" name="id" value="<?= $dtMeeting['idMeeting']; ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                    <button type="submit" class="btn btn-primary">Yes</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="delete<?= $dtMeeting['idMeeting']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <form method="POST" action="<?= base_url('Room/delete'); ?>">
                                                                        <input type="hidden" name="id" value="<?= $dtMeeting['idMeeting']; ?>">
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