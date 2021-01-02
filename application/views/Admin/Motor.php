<div class="nk-content">
    <div class=" container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Data Motor</h3>
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
                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Tambah Motor</span></a>
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
                            <div class="nk-tb-col tb-col-sm text-center"><span>Nama Motor</span></div>
                            <div class="nk-tb-col text-center"><span>Merk</span></div>
                            <div class="nk-tb-col text-center"><span>Tahun</span></div>
                            <div class="nk-tb-col text-center"><span>Plat Nomor</span></div>
                            <div class="nk-tb-col tb-col-md text-center"><span>Tarif Sewa</span></div>
                            <div class="nk-tb-col tb-col-md text-center"><span>Status</span></div>
                            <div class="nk-tb-col tb-col-md"><span></span></div>

                        </div><!-- .nk-tb-item -->

                        <?php foreach ($motor as $m) : ?>
                            <div class="nk-tb-item">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                        <label class="custom-control-label" for="uid1"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <span class="tb-product">
                                        <img src="<?= base_url() ?>assets/img/<?= $m['image'] ?> " class="thumb">
                                        <span class="title"><?= $m['nama_motor'] ?></span>
                                    </span>
                                </div>
                                <div class="nk-tb-col text-center">
                                    <span class="tb-lead"><?= $m['merk'] ?></span>
                                </div>
                                <div class="nk-tb-col text-center">
                                    <span class="tb-sub"><?= $m['tahun'] ?></span>
                                </div>
                                <div class="nk-tb-col text-center ">
                                    <span class="tb-sub"><?= $m['plat_nomor'] ?></span>
                                </div>
                                <div class="nk-tb-col tb-col-md text-center">
                                    <span class="tb-sub">Rp.<?= $m['tarif_sewa'] ?></span>
                                </div>
                                <div class="nk-tb-col tb-col-md text-center">
                                    <!-- <span class="tb-sub badge badge-warning"><?= $m['status'] ?></span> -->
                                <?php 
                                    if($m['status'] == "sewa") {
                                        echo "<span class='tb-sub badge badge-danger'>".$m['status']."</span>";
                                    } else{
                                        echo "<span class='tb-sub badge badge-success'>".$m['status']."</span>";
                                    }
                                    ?>
                                </div>

                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1 my-n1">
                                        <li class="mr-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="<?= base_url() ?>Admin/editMotor/<?= $m['id_motor'] ?>" data-target="editMotor<?= $m['id_motor'] ?>" class="toggle"><em class="icon ni ni-edit"></em><span>Edit Data Motor</span></a></li>
                                                        <li><a href="<?= base_url() ?>Admin/getMotor/<?= $m['id_motor'] ?>" data-toggle="modal" data-target="#modal_motor<?= $m['id_motor'] ?>"><em class="icon ni ni-eye"></em><span>View Data Motor</span></a></li>
                                                        <li><a href="<?= base_url() ?>Admin/deleteMotor/<?= $m['id_motor'] ?>"><em class="icon ni ni-trash"></em><span>Remove Data Motor</span></a></li>
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
                            <h5 class="nk-block-title">Tambah Data Motor</h5>

                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <form action="<?= base_url('Motor') ?>" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="nama_motor">Nama Motor</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="nama_motor" id="nama_motor" value="<?= set_value('nama_motor') ?>">
                                            <?= form_error('nama_motor', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="merk">Merk</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="merk" name="merk" data-placeholder="-- Pilihan Merk --">
                                                <option></option>
                                                <?php foreach ($merk as $mk) : ?>
                                                    <option><?= $mk['nama_merk'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <?= form_error('merk', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tahun">Tahun</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="tahun" id="tahun" value="<?= set_value('tahun') ?>">
                                            <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="plat_nomor">Plat Nomor</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="plat_nomor" id="plat_nomor" value="<?= set_value('plat_nomor') ?>">
                                            <?= form_error('plat_nomor', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tarif_sewa">Tarif Sewa</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="tarif_sewa" id="tarif_sewa" value="<?= set_value('tarif_sewa') ?>">
                                            <?= form_error('tarif_sewa', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="warna">Warna</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="warna" id="warna" value="<?= set_value('warna') ?>">
                                            <?= form_error('warna', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="image">Gambar</label>
                                        <div class="form-control-wrap">
                                            <input type="file" autocomplete="off" class="form-control" name="image" id="image" value="<?= set_value('image') ?>">
                                            <?= form_error('image', '<small class="text-danger pl-3">', '</small>') ?>
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



<?php foreach ($motor as $m) : ?>
    <div class="modal fade" id="modal_motor<?= $m['id_motor'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Detail Motor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?= base_url() ?>assets/img/<?= $m['image'] ?>">
                        </div>
                        <div class="col-md-6">
                            <span>Nama Motor : <?= $m['nama_motor'] ?></span><br>
                            <span>Merk : <?= $m['merk'] ?></span><br>
                            <span>Tahun : <?= $m['tahun'] ?></span><br>
                            <span>Warna : <?= $m['warna'] ?></span><br>
                            <span>Plat Nomor : <?= $m['plat_nomor'] ?></span><br>
                            <span>Tarif Sewa : <?= $m['tarif_sewa'] ?></span><br>
                            <span>Status : <?= $m['status'] ?></span><br>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>



<?php foreach ($motor as $m) : ?>
    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="editMotor<?= $m['id_motor'] ?>" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Edit Data Motor</h5>

            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <form action="<?= base_url() ?>Admin/editMotor" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="hidden" name="id_motor" value="<?= $m['id_motor'] ?>">
                            <label class="form-label" for="nama_motor">Nama Motor</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="nama_motor" id="nama_motor" value="<?= $m['nama_motor'] ?>">

                            </div>
                        </div>
                    </div>
                    <div class="col-mb-6">
                        <div class="form-group">
                            <label class="form-label" for="merk">Merk</label>
                            <div class="form-control-wrap ">
                                <select class="form-control form-select" id="merk" name="merk" data-placeholder="-- Pilihan Merk --">
                                    <option></option>
                                    <?php foreach ($merk as $mk) : ?>

                                        <?php if ($m['merk'] == $mk['nama_merk']) : ?>
                                            <option value="<?= $m['merk'] ?>" selected><?= $mk['nama_merk'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $mk['nama_merk'] ?>"><?= $mk['nama_merk'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach ?>

                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-mb-6">
                        <div class="form-group">
                            <label class="form-label" for="tahun">Tahun</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="tahun" id="tahun" value="<?= $m['tahun'] ?>">

                            </div>
                        </div>
                    </div>
                    <div class="col-mb-6">
                        <div class="form-group">
                            <label class="form-label" for="plat_nomor">Plat Nomor</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="plat_nomor" id="plat_nomor" value="<?= $m['plat_nomor'] ?>">

                            </div>
                        </div>
                    </div>
                    <div class="col-mb-6">
                        <div class="form-group">
                            <label class="form-label" for="tarif_sewa">Tarif Sewa</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="tarif_sewa" id="tarif_sewa" value="<?= $m['tarif_sewa'] ?>">

                            </div>
                        </div>
                    </div>


                    <div class="col-mb-6">
                        <div class="form-group">
                            <label class="form-label" for="warna">Warna</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="warna" id="warna" value="<?= $m['warna'] ?>">

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="image">Gambar</label>
                            <div class="form-control-wrap">
                                <input type="file" autocomplete="off" class="form-control" name="image" id="image" value="<?= $m['image'] ?>">
                                <img src="<?= base_url() ?>assets/img/<?= $m['image'] ?> " class="thumb">
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