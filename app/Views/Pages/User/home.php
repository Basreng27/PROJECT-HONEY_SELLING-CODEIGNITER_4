<?= $this->extend('Pages\Static\Layout_users\layout_users'); ?>

<?= $this->section('content_user'); ?>
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Home
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="" src="set_admin/<?= $set['logo']; ?>" height="300px" width="250px">
                                </div>
                                <?php foreach ($data_reviews as $review) : ?>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" alt="" src="product_review/<?= $review['image_review']; ?>" height="300px" width="250px">
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row row-cards">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Best Product</h2>
                        <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <img style="display: flex;justify-content: center;align-items: center;" src="<?= base_url() ?>/products/<?= $best_product[0]['image']; ?>" alt="Not Found">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <h1><?= $best_product[0]['deskripsi']; ?></h1>
                                        <br>
                                        <p>Harga : <?= $best_product[0]['harga']; ?></p>
                                        <p>Khasiat : </p>
                                        <?= $best_product[0]['isi_khasiat']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>