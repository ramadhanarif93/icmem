        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Presentation Schedule</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            Presentation Schedule (Western Indonesian Time, GMT +7)
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:800px;">
                            <form action="<?= base_url('Room/presentation'); ?>" method="post" class="mb-5">
                                <select name="stream" id="" class="form-control">
                                    <option value="">Stream</option>
                                    <option value="All">All</option>
                                    <?php
                                    foreach ($streamer as $dt) {
                                        echo "<option value='" . $dt['speakername'] . "'>" . $dt['speakername'] . "</option>";
                                    }
                                    ?>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary mt-2">Filter by Stream</button>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered" style="font-size: 12px;" id="dataTable2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Stream</th>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Session</th>
                                            <th>Date</th>
                                            <th>Time Start</th>
					<th>Time End</th>
                                            <th>Session Chair</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($presentation as $dtPresentation) {
                                            foreach ($session as $dtSession) {
                                                if ($dtPresentation['kodeSession'] == $dtSession['session']) {
                                        ?>
                                                    <tr class="text-center">
                                                        <td><?= $dtPresentation['speakername'] ?></td>
                                                        <td><?= $dtSession['idpapper'] ?></td>
                                                        <td class="text-left"><?= $dtSession['title'] ?></td>
                                                        <td><?= $dtSession['author'] ?></td>
                                                        <td><?= $dtSession['session'] ?></td>
                                                        <td><?= $dtPresentation['meetingDate'] ?></td>
                                                        <td><?= date_format(date_create($dtPresentation['meetingTimeStart']), "H:i"); ?></td>
<td><?= date_format(date_create($dtPresentation['meetingTimeEnd']), "H:i"); ?></td>
                                                        <td><?= $dtPresentation['chairname'] ?></td>
                                                    </tr>
                                        <?php
                                                }
                                            }
                                        } // end show Workshop 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
        <!-- /.container-fluid -->

        <!-- -->

        </div>
        <!-- End of Main Content -->