<div class="nk-content">
    <div class=" container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Laporan Sewa</h3><br>


                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">

                                        <li class="nk-block-tools-opt">
                                            <a href="#" class=" btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="<?= base_url() ?>Admin/pdf" class=" btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Export</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="nk-tb-list is-separate mb-3">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid">
                                    <label class="custom-control-label" for="uid"></label>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-sm text-center"><span>Nama</span></div>
                            <div class="nk-tb-col text-center"><span>Tanggal Sewa</span></div>
                            <div class="nk-tb-col text-center"><span>Tanggal Kembali</span></div>
                            <div class="nk-tb-col text-center"><span>Plat Nomor</span></div>
                            <div class="nk-tb-col tb-col-md text-center"><span>Nomor HP</span></div>
                            <div class="nk-tb-col tb-col-md text-center"><span>Biaya</span></div>
                            <div class="nk-tb-col tb-col-md text-center"><span>Status</span></div>

                        </div><!-- .nk-tb-item -->
                        <?php foreach ($transaksi as $t) : ?>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                        <label class="custom-control-label" for="uid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-product">

                                        <span class="title"><?= $t['nama'] ?></span>
                                    </span>
                                </div>
                                <div class="nk-tb-col text-center">
                                    <span class="tb-lead"><?= $t['tgl_sewa'] ?></span>
                                </div>
                                <div class="nk-tb-col text-center">
                                    <span class="tb-sub"><?= $t['tgl_kembali'] ?></span>
                                </div>
                                <div class="nk-tb-col text-center ">
                                    <span class="tb-sub"><?= $t['no_plat'] ?></span>
                                </div>
                                <div class="nk-tb-col tb-col-md text-center">
                                    <span class="tb-sub"><?= $t['no_hp'] ?></span>
                                </div>
                                <div class="nk-tb-col tb-col-md text-center">
                                    <span class="tb-sub">Rp.<?= $t['biaya'] ?></span>
                                </div>
                                <div class="nk-tb-col tb-col-md text-center">
                                    <?php
                                    if ($t['status'] == "sewa") {
                                        echo "<span class='tb-sub badge badge-danger'>" . $t['status'] . "</span>";
                                    } elseif ($t['status'] == "selesai") {
                                        echo "<span class='tb-sub badge badge-success'>" . $t['status'] . "</span>";
                                    }
                                    ?>
                                    <!-- <span class="tb-sub badge badge-success"><?= $t['status'] ?></span> -->
                                </div>

                            </div><!-- .nk-tb-item -->
                        <?php endforeach ?>

                    </div><!-- .nk-tb-list -->
                </div><!-- .nk-block -->

            </div>
        </div>
    </div>
</div>