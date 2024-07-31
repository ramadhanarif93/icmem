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
                            <form method="POST" action="<?= base_url('room/editProses'); ?>" enctype="multipart/form-data">
                                <?php
                                foreach ($meeting as $data) {
                                ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select name="category" id="" class="form-control">
                                            <option value="<?= $data['category']; ?>"> <?= $data['category']; ?> </option>
                                            <option value="">-- Category --</option>
                                            <option value="Plenary"> Plenary </option>
                                            <option value="Parallel"> Parallel </option>
                                            <option value="Support"> Support </option>
                                            <option value="Information"> Information </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Topic</label>
                                        <input type="text" class="form-control" name="topic" value="<?= $data['topic']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name" value="<?= $data['name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <br>
                                        <input type="file" name="foto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meeting ID</label>
                                        <input type="text" class="form-control" name="meetingID" value="<?= $data['meetingID']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meeting Password</label>
                                        <input type="text" class="form-control" name="meetingPWD" value="<?= $data['meetingPWD']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date</label>
                                        <input type="date" name="date" class="form-control" value="<?= $data['meetingDate']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Time Start</label>
                                        <input type="time" name="timeStart" class="form-control" value="<?= $data['meetingTimeStart']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Time End</label>
                                        <input type="time" name="timeStart" class="form-control" value="<?= $data['meetingTimeEnd']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link App</label>
                                        <input type="text" name="link" class="form-control" value="<?= $data['link']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link Meet</label>
                                        <textarea name="meet" class="form-control" id="" cols="30" rows="10"><?= $data['meet']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10"><?= $data['description']; ?></textarea>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $data['idMeeting']; ?>">
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