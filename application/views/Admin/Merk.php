<div class="nk-content">
    <div class=" container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Data Merk</h3>
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
                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Tambah Merk</span></a>
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
                            <div class="nk-tb-col tb-col-sm "><span>Nama Merk</span> </div>
                            <div class="nk-tb-col"><span>Type</span></div>
                            <div class="nk-tb-col tb-col-md"><span></span></div>

                        </div><!-- .nk-tb-item -->

                        <?php foreach ($merk as $m) : ?>
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
                                        <span class="title"><?= $m['nama_merk'] ?></span>
                                    </span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-lead"><?= $m['type'] ?></span>
                                </div>


                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1 my-n1">
                                        <li class="mr-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="<?= base_url() ?>Admin/editMerk/<?= $m['id_merk'] ?>" data-target="editMerk<?= $m['id_merk'] ?>" class="toggle"><em class="icon ni ni-edit"></em><span>Edit Data Merk</span></a></li>
                                                        <li><a href="<?= base_url() ?>Admin/deleteMerk/<?= $m['id_merk'] ?>"><em class="icon ni ni-trash"></em><span>Remove Data Merk</span></a></li>
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
                            <h5 class="nk-block-title">Tambah Data Merk</h5>

                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <form action="<?= base_url('Merk') ?>" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="nama_merk">Nama Merk</label>
                                        <div class="form-control-wrap">
                                            <input type="text" autocomplete="off" class="form-control" name="nama_merk" id="nama_merk" value="<?= set_value('nama_merk') ?>">
                                            <?= form_error('nama_merk', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-mb-6">
                                    <div class="form-group">
                                        <label class="form-label" for="type">Type</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control form-select" id="type" name="type" data-placeholder="-- Pilihan Type --">
                                                <option></option>
                                                <option>Mobil</option>
                                                <option>Motor</option>

                                            </select>
                                            <?= form_error('type', '<small class="text-danger pl-3">', '</small>') ?>
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




<?php foreach ($merk as $m) : ?>
    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="editMerk<?= $m['id_merk'] ?>" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Edit Data Mobil</h5>

            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <form action="<?= base_url() ?>Admin/editMerk" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="hidden" name="id_merk" value="<?= $m['id_merk'] ?>">
                            <label class="form-label" for="nama_merk">Nama Merk</label>
                            <div class="form-control-wrap">
                                <input type="text" autocomplete="off" class="form-control" name="nama_merk" id="nama_merk" value="<?= $m['nama_merk'] ?>">

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