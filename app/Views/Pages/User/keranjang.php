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
                                <tr>
                                    <td>
                                        <div>1</div>
                                    </td>
                                    <td>
                                        <span class="avatar me-2" style="background-image: url(products/1.jpg)"></span>
                                    </td>
                                    <td>
                                        <div>Madu Manis</div>
                                    </td>
                                    <td>
                                        <div>2000</div>
                                    </td>
                                    <td>
                                        <div>3</div>
                                    </td>
                                    <td>
                                        <div>6000</div>
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="#" class="btn" title="Checkout Untuk Menghubungi Admin">
                                                Checkout
                                            </a>
                                    </td>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>