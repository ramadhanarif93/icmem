        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Fun Workshop & Exhibition</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>

            <!-- Content Row -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            Fun Workshop
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:500px;">
                            <div class="row">
                                <?php
                                $no = 1;
                                foreach ($fun as $dtFun) {
                                ?>
                                    <div class="col-4 text-center">
                                        <div class=" card mb-3" style="overflow-y: scroll;height:350px !important;font-size:14px;">
                                            <img src="<?= base_url('assets/img/' . $dtFun['logo']); ?>" class="card-img-top img-thumbnail" style="width: 330px !important;height:210px;margin:auto;" alt="...">
                                            <div class="card-body">
                                                <p class="card-title p-0 m-0" style="font-size:14px;font-weight:600;color:black;"><?= $dtFun['title']; ?></p>
                                                <p class="card-text  p-0 m-0" style="font-size:12px;"><?= $dtFun['description'] ?></p>
                                                <form action="<?= base_url("Room/Vexchibition") ?>" method="post">
                                                    <input type="hidden" name="id" value="<?= $dtFun['idExchibition']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-info">Click Here</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Healthy Life
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:500px;">
                            <div class="row">
                                <?php
                                $no = 1;
                                foreach ($exercises as $dtExhibition) {
                                ?>
                                    <div class="col-4 text-center">
                                        <div class=" card mb-3" style="overflow-y: scroll;height:350px !important;font-size:14px;">
                                            <img src="<?= base_url('assets/img/' . $dtExhibition['logo']); ?>" class="card-img-top img-thumbnail" style="width: 330px !important;height:210px;margin:auto;" alt="...">
                                            <div class="card-body">
                                                <p class="card-title p-0 m-0" style="font-size:14px;font-weight:600;color:black;"><?= $dtExhibition['title']; ?></p>
                                                <p class="card-text  p-0 m-0" style="font-size:12px;"><?= $dtExhibition['description'] ?></p>
                                                <form action="<?= base_url("Room/Vexchibition") ?>" method="post">
                                                    <input type="hidden" name="id" value="<?= $dtExhibition['idExchibition']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-info">Click Here</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            Exhibition
                        </div>
                        <div class="card-body" style="overflow-y: scroll; height:500px;">
                            <div class="row">
                                <?php
                                $no = 1;
                                foreach ($exhi as $dtEx) {
                                ?>
                                    <div class="col-4 text-center">
                                        <div class="card mb-3" style="overflow-y: scroll;height:400px !important;">
                                            <img src="<?= base_url('assets/img/' . $dtEx['logo']); ?>" style="width: 330px !important;height:210px;margin:auto;" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p style="font-size:14px;font-weight:600;color:black;" class=" card-title"><?= $dtEx['title']; ?></p>
                                                <p style="font-size:12px" class="card-text"><?= $dtEx['description']; ?></p>
                                                <?php
                                                if ($dtEx['youtube'] != "") {
                                                    echo "<a href='" . $dtEx['youtube'] . "' target='_blank' class='btn btn-info m-2' style='margin: 5px;'>Website</a>";
                                                }

                                                if ($dtEx['instagram'] != "") {
                                                    echo "<a href='" . $dtEx['instagram'] . "' target='_blank' class='btn btn-primary m-2'>Instagram</a>";
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