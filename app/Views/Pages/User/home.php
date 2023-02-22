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
                                    <img class="d-block" alt="" src="set_admin/<?= $set['logo']; ?>" style="width: 400px; height: 300px; display: blok; margin: auto;">
                                </div>
                                <?php foreach ($data_reviews as $review) : ?>
                                    <div class="carousel-item">
                                        <img class="d-block" alt="" src="product_review/<?= $review['image_review']; ?>" style="width: 400px; height: 300px; display: blok; margin: auto;">
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <?php if (!empty($best_seller)) { ?>
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Best Seller</h2>
                            <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php foreach ($best_seller as $best) { ?>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <img style="display: flex;justify-content: center;align-items: center;" src="<?= base_url() ?>/products/<?= $best['image']; ?>" alt="Not Found">
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <h1><?= $best['deskripsi']; ?></h1>
                                                <br>
                                                <p>Harga : <?= $best['harga']; ?></p>
                                                <p>Khasiat : </p>
                                                <?= $best['isi_khasiat']; ?>
                                            </div>
                                        </div>
                                        <br>
                                        <hr><br>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?= $this->endSection(); ?>