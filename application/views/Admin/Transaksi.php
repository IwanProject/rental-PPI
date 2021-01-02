<div class="nk-content">
    <div class=" container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Data Transaksi</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-search"></em>
                                                </div>
                                                <input type="text" class="form-control" id="default-04" placeholder="Quick search by id">
                                            </div>
                                        </li>

                                        <li class="nk-block-tools-opt">
                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Tambah Transaksi</span></a>
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
                            <div class="nk-tb-col tb-col-md"><span></span></div>
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

                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1 my-n1">
                                        <li class="mr-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="<?= base_url() ?>Admin/Selesai/<?= $t['idtr'] ?>">
                                                                <em class="icon ni ni-sign-usd-alt2"></em>
                                                                <span>Selesai</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url() ?>Admin/editTransaksi/<?= $t['idtr'] ?>" data-target="editTransaksi<?= $t['idtr'] ?>" class="toggle">
                                                                <em class="icon ni ni-edit"></em>
                                                                <span>Edit Data Transaksi</span>
                                                            </a>
                                                        </li>
                                                        <li><a href="<?= base_url() ?>Admin/deleteTransaksi/<?= $t['idtr'] ?>"><em class="icon ni ni-trash"></em><span>Remove Data Transaksi</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-tb-item -->
                        <?php endforeach ?>

                    </div><!-- .nk-tb-list -->
                </div><!-- .nk-block -->
                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Tambah Data Transaksi</h5>

                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <form action="<?= base_url('Transaksi') ?>" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="nama">Nama</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="nama" id="nama" value="<?= set_value('nama') ?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="no_ktp">Nomor KTP</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="no_ktp" id="no_ktp" value="<?= set_value('no_ktp') ?>">
                                            <?= form_error('no_ktp', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="no_hp">Nomor HP</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="no_hp" id="no_hp" value="<?= set_value('no_hp') ?>">
                                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="alamat">Alamat</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="alamat" id="alamat" value="<?= set_value('alamat') ?>">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="form-label" for="no_plat">Plat Nomor</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="no_plat" id="no_plat" value="<?= set_value('no_plat') ?>">
                                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tgl_sewa">Tanggal Sewa</label>
                                        <div class="form-control-wrap">
                                            <input type="datetime-local" autocomplete="off" class="form-control" name="tgl_sewa" id="tgl_sewa" value="<?= set_value('tgl_sewa') ?>">
                                            <?= form_error('tgl_sewa', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tgl_kembali">Tanggal Kembali</label>
                                        <div class="form-control-wrap">
                                            <input type="datetime-local" autocomplete="off" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?= set_value('tgl_kembali') ?>">
                                            <?= form_error('tgl_kembali', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($transaksi as $t) : ?>
    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="editTransaksi<?= $t['idtr'] ?>" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Edit Data transaksi</h5>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <form action="<?= base_url() ?>Admin/editTransaksi" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="nama">Nama</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="nama" id="nama" value="<?= $t['nama'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label" for="no_ktp">Nomor KTP</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="no_ktp" id="no_ktp" value="<?= $t['no_ktp'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label" for="no_hp">Nomor HP</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="no_hp" id="no_hp" value="<?= $t['no_hp'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label" for="alamat">Alamat</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="alamat" id="alamat" value="<?= $t['alamat'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label" for="no_plat">Plat Nomor</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="no_plat" id="no_plat" value="<?= $t['no_plat'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label" for="tgl_sewa">Tanggal Sewa</label>
                            <div class="form-control-wrap">
                                <input type="datetime-local" autocomplete="off" class="form-control" name="tgl_sewa" id="tgl_sewa" value="<?= $t['tgl_sewa'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="form-label" for="tgl_kembali">Tanggal Kembali</label>
                            <div class="form-control-wrap">
                                <input type="datetime-local" autocomplete="off" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?= $t['tgl_kembali'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php endforeach ?>