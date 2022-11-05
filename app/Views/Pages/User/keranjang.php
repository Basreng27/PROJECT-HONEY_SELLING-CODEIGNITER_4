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
                                                <a href="#" class="btn" title="Checkout Untuk Menghubungi Admin">
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
<?= $this->endSection(); ?>