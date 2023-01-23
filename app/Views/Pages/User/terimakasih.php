<?= $this->extend('Pages\Static\Layout_users\layout_users'); ?>

<?= $this->section('content_user'); ?>
<style>
    .thank-you-page {
        text-align: center;
        padding: 50px;
    }

    h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .thank-you-image {
        margin: 50px 0;
    }
</style>

<?php if (session()->getFlashdata('gagal')) { ?>
    <div class="alert alert-danger" role="alert">
        Product gagal dicheckout
    </div>
<?php } ?>

<?php

use App\Models\No_wa_model;

$this->No_waModel = new No_wa_model();
$no = $this->No_waModel->find(1); ?>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">

            <div class="col-12">
                <div class="card">
                    <div class="thank-you-page">
                        <h1>Terima kasih telah memesan!</h1>
                        <p>Pesanan Anda sedang kami proses. Kami akan menghubungi anda melalui nomor yang telah dikirimkan.</p>
                        <p>Jika ada pertanyaan, silakan hubungi kami melalui <a href="https://api.whatsapp.com/send?phone=<?= $no['no_wa'] ?>">kontak kami</a>.</p>
                        <div class="thank-you-image">
                            <img style="height: 75px; width: 75px;" src="<?= base_url() ?>/set_admin/ckls.png" alt="Ucapan terima kasih">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>