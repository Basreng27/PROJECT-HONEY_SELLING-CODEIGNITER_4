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
                        <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                            <!-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class=" active"></button>
                                <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" class=""></button>
                                <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" class=""></button>
                                <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="3" class=""></button>
                                <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="4" class=""></button>
                            </div> -->
                            <?php foreach ($data_reviews as $review) : ?>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" alt="Review Product" src="product_review/<?= $review['image_review']; ?>" height="300px" width="250px">
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>