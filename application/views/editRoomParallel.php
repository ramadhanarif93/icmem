        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->

            <div class="row">
                <div class="col-xl-12 col-md">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Room Parallel</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('Room/editParallelProses'); ?>" enctype="multipart/form-data">
                                <?php
                                foreach ($meeting as $data) {
                                ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Session</label>
                                        <select name="session" id="" class="form-control">
                                            <option value="<?= $data['kodeSession'] ?>"><?= $data['kodeSession'] ?></option>
                                            <option value="" disabled>== Choice Another Session ==</option>
                                            <?php
                                            foreach ($session as $dtSession) {
                                                if ($data['kodeSession'] != $dtSession['session']) {
                                                    echo "<option value='" . $dtSession['session'] . "'>" . $dtSession['session'] . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Speaker Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="speakername" value="<?= $data['speakername']; ?>">
                                    </div>
                                    <div class=" form-group">
                                        <label for="exampleInputEmail1">Speaker Chair</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chairname" value="<?= $data['chairname']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <br>
                                        <input type="file" name="foto" required>
                                    </div>
                                    <div class=" form-group">
                                        <label for="exampleInputEmail1">Meeting ID</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="meetingID" value="<?= $data['meetingID']; ?>">
                                    </div>
                                    <div class=" form-group">
                                        <label for="exampleInputEmail1">Meeting Password</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="meetingPWD" value="<?= $data['meetingPWD']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date</label>
                                        <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data['meetingDate']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Time Start</label>
                                        <input type="time" name="timeStart" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data['meetingTimeStart']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Time End</label>
                                        <input type="time" name="timeEnd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data['meetingTimeEnd']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link App</label>
                                        <textarea name="link" class="form-control" id="" cols="30" rows="10"><?= $data['link']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10"><?= $data['description']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link Recording</label>
                                        <textarea name="linkRec" class="form-control" id="" cols="30" rows="10"><?= $data['linkRec']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link Meet</label>
                                        <textarea name="meet" class="form-control" id="" cols="30" rows="10"><?= $data['meet']; ?></textarea>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $data['idParallel']; ?>">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                <?php
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->