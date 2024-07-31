        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->

            <div class="row">
                <div class="col-xl-12 col-md">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Room</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('Room/addParallel'); ?>" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Session</label>
                                    <select name="session" id="" class="form-control">
                                        <?php
                                        foreach ($session as $dtSession) {
                                            echo "<option value='" . $dtSession['session'] . "'>" . $dtSession['session'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Topic</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="topic">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Speaker Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="speakername">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Session Chair Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chairname">
                                </div>
                                <div class="form-group">
                                    <label>Photo</label>
                                    <br>
                                    <input type="file" name="foto">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Meeting ID</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="meetingID">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Meeting Password</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="meetingPWD">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date</label>
                                    <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Time Start</label>
                                    <input type="time" name="timeStart" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Time End</label>
                                    <input type="time" name="timeEnd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Session</label>
                                    <select name="session" id="" class="form-control">
                                        <?php
                                        foreach ($session as $dtSession) {
                                            echo "<option value='" . $dtSession['session'] . "'>" . $dtSession['session'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Link App</label>
                                    <input type="text" name="link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Link Recording</label>
                                    <textarea name="linkRec" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Link Meet</label>
                                    <input type="text" name="meet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->