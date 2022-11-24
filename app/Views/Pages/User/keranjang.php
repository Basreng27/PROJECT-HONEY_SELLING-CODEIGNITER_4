<?= $this->extend('Pages\Static\Layout_users\layout_users'); ?>

<?= $this->section('content_user'); ?>
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Keranjang
                </h2>
            </div>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('gagal')) { ?>
    <div class="alert alert-danger" role="alert">
        Product gagal dicheckout
    </div>
<?php } ?>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">

            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Nama Madu</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th class="w-1">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_keranjang as $keranjang) : ?>
                                    <tr>
                                        <td>
                                            <div><?= $no++; ?></div>
                                        </td>
                                        <td>
                                            <span class="avatar me-2" style="background-image: url(products/<?= $keranjang['image']; ?>)"></span>
                                        </td>
                                        <td>
                                            <div><?= $keranjang['nama_madu']; ?></div>
                                        </td>
                                        <td>
                                            <div><?= $keranjang['harga']; ?></div>
                                        </td>
                                        <td>
                                            <div><?= $keranjang['jumlah']; ?></div>
                                        </td>
                                        <td>
                                            <div><?= $keranjang['total']; ?></div>
                                        </td>
                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <a href="#" class="btn" title="Checkout Untuk Menghubungi Admin" data-bs-toggle="modal" data-bs-target="#modal-keranjang<?= $keranjang['id_keranjang']; ?>">
                                                    Checkout
                                                </a>
                                        </td>
                                    <?php endforeach ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php foreach ($data_keranjang as $keranjangs) : ?>
    <div class="modal modal-blur fade" id="modal-keranjang<?= $keranjangs['id_keranjang']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <form action="/user-checkout" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id_user" value="<?= session()->get('id_user') ?>">
                        <input type="hidden" name="id_keranjang" value="<?= $keranjangs['id_keranjang']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" name="nama" value="<?= session()->get('nama') ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Madu</label>
                            <input type="text" class="form-control" name="nama_madu" value="<?= $keranjangs['nama_madu']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah dibeli</label>
                            <input type="number" class="form-control" name="jumlah" maxlength="3" value="<?= $keranjangs['jumlah']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Total Harga</label>
                            <input type="number" class="form-control" name="total" value="<?= $keranjangs['total']; ?>" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control <?= ($validation->hasError('lokasi')) ? 'is-invalid' : ''; ?>" name="lokasi" rows="3"><?= old('lokasi'); ?></textarea>
                            <div class="invalid-feedback"><?= $validation->getError('lokasi'); ?></div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <h3><b>Pembayaran Dilakukan Dengan Sistem COD</b></h3>
                            </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">Checkout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?= $this->endSection(); ?>