<?= $this->extend('Pages\Static\Layout_users\layout_users'); ?>

<?= $this->section('content_user'); ?>
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    <?= $madu['nama_madu']; ?>
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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <img style="display: flex;justify-content: center;align-items: center;" src="<?= base_url() ?>/products/<?= $madu['image']; ?>" alt="Not Found">
                                <br>
                                <h1><?= $madu['deskripsi']; ?></h1>
                                <br>
                                <p>Harga : <?= $madu['harga']; ?></p>
                                <p>Khasiat : </p>
                                <?= $madu['isi_khasiat']; ?>
                                <br>
                                <?php if (session()->get('stat') == 'login-admin' || session()->get('stat') == 'login-user') { ?>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-keranjang<?= $madu['id_madu']; ?>">+ Keranjang</a>
                                <?php } else { ?>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-belum-login">+ Keranjang</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-keranjang<?= $madu['id_madu']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <form action="/user-tambah-keranjang" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id_user" value="<?= session()->get('id_user') ?>">
                    <input type="hidden" name="id_madu" value="<?= $madu['id_madu']; ?>">
                    <div class="mb-3">
                        <label class="form-label">Nama Madu</label>
                        <input type="text" class="form-control" name="nama_madu" value="<?= $madu['nama_madu']; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" value="<?= $madu['harga']; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3" readonly><?= $madu['deskripsi']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sisa <?= $madu['nama_madu']; ?></label>
                        <input type="number" class="form-control" name="sisa" value="<?= $madu['sisa']; ?>" readonly>
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
<?= $this->endSection(); ?>