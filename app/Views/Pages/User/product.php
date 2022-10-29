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

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-img-top img-responsive img-responsive-21x9" style="background-image: url(products/1.jpg)"></div>
                    <div class="card-body">
                        <h3 class="card-title">Card with top image</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima
                            neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-keranjang">Tambah Ke Keranjang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-img-top img-responsive img-responsive-21x9" style="background-image: url(products/2.jpg)"></div>
                    <div class="card-body">
                        <h3 class="card-title">Card with top image</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima
                            neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-keranjang">Tambah Ke Keranjang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-img-top img-responsive img-responsive-21x9" style="background-image: url(products/3.jpg)"></div>
                    <div class="card-body">
                        <h3 class="card-title">Card with top image</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima
                            neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-keranjang">Tambah Ke Keranjang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-img-top img-responsive img-responsive-21x9" style="background-image: url(products/4.jpg)"></div>
                    <div class="card-body">
                        <h3 class="card-title">Card with top image</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima
                            neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-keranjang">Tambah Ke Keranjang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-keranjang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama Madu</label>
                    <input type="text" class="form-control" name="example-text-input">
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="example-text-input">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" class="form-control" name="example-text-input" maxlength="3">
                </div>
            </div>

            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Tambah Ke Keranjang
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>