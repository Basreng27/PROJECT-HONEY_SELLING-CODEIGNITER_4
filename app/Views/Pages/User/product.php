<?= $this->extend('Pages\Static\Layout_users\layout_users'); ?>

<?= $this->section('content_user'); ?>
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Product
                </h2>
            </div>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('gagal')) { ?>
    <div class="alert alert-danger" role="alert">
        Gagal ditambahkan ke Keranjang
    </div>
<?php } ?>

<?php if (session()->getFlashdata('gagalSisa')) { ?>
    <div class="alert alert-danger" role="alert">
        Gagal dikarenakan jumlah yang diinginkan melebihi sisa product
    </div>
<?php } ?>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <?php foreach ($data_products as $product) :
                $this->RatingModel = new App\Models\Rating_model();

                $sumRating = $this->RatingModel->sumRating($product['id_madu']);
                $countRating = $this->RatingModel->countRating($product['id_madu']);

                $resultRating = 0;
                if ($countRating) {
                    $resultRating = $sumRating['rating'] / $countRating;
                }
            ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-img-top img-responsive img-responsive-21x9" style="background-image: url(products/<?= $product['image']; ?>)"></div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="/detail/<?= $product['id_madu']; ?>"><?= $product['nama_madu']; ?></a></h3>
                            <p class="text-muted"><?= $product['deskripsi']; ?></p>
                            <p>
                                <?php for ($i = 0; $i < 5; $i++) {
                                    if (($i + 1) <= $resultRating) { ?>
                                        <span class="fa fa-star checked"></span>
                                    <?php } else { ?>
                                        <span class="fa fa-star"></span>
                                <?php }
                                } ?>
                            </p>
                            <p style="text-align: right;">Rp.<?= $product['harga']; ?>,-</p>
                        </div>
                        <div class="card-footer">
                            <?php if (session()->get('stat') == 'login-admin' || session()->get('stat') == 'login-user') { ?>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-keranjang<?= $product['id_madu']; ?>">+ Keranjang</a>
                            <?php } else { ?>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-belum-login">+ Keranjang</a>
                            <?php } ?>
                            <br>
                            <br>
                            <!-- <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#komen<?= $product['id_madu']; ?>">Komentar</a>
                            <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#khasiat<?= $product['id_madu']; ?>">Khasiat</a> -->
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php foreach ($data_products as $products) : ?>
    <div class="modal modal-blur fade" id="modal-keranjang<?= $products['id_madu']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <form action="/user-tambah-keranjang" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id_user" value="<?= session()->get('id_user') ?>">
                        <input type="hidden" name="id_madu" value="<?= $products['id_madu']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Madu</label>
                            <input type="text" class="form-control" name="nama_madu" value="<?= $products['nama_madu']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control" name="harga" value="<?= $products['harga']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="3" readonly><?= $products['deskripsi']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sisa <?= $products['nama_madu']; ?></label>
                            <input type="number" class="form-control" name="sisa" value="<?= $products['sisa']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" maxlength="3" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Tambah Ke Keranjang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>

<div class="modal modal-blur fade" id="modal-belum-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 9v2m0 4v.01" />
                    <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                </svg>
                <h3>Belum Login?</h3>
                <div class="text-muted">Anda Harus Login!!</div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn w-100" data-bs-dismiss="modal">Cancel</a>
                        </div>
                        <div class="col">
                            <a href="/login" class="btn btn-info w-100">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($data_products as $productk) : ?>
    <div class="modal modal-blur fade" id="komen<?= $productk['id_madu']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <input type="hidden" name="id_user" value="<?= session()->get('id_user') ?>">
                    <input type="hidden" name="id_madu" value="<?= $productk['id_madu']; ?>">
                    <?php
                    $komen = (new App\Models\Rating_model())->komen($productk['id_madu']);
                    foreach ($komen as $dkomen) :
                        if (!empty($dkomen['komen'])) { ?>
                            <div class="mb-3 mt-3" style="background-color: #F6F6F6;">
                                <label class="form-label"><?= $dkomen['nama']; ?></label>
                                <p><?= $dkomen['komen']; ?></p>
                            </div>
                            <hr>
                    <?php }
                    endforeach ?>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?php foreach ($data_products as $productkhas) : ?>
    <div class="modal modal-blur fade" id="khasiat<?= $productkhas['id_madu']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <p><?= $productkhas['isi_khasiat']; ?></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?= $this->endSection(); ?>