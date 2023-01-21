<?= $this->extend('Pages\Static\Layout_admins\layout_admins'); ?>

<?= $this->section('content_admin'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Khasiat Madu</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <?php foreach ($data_products as $khasiat) : ?>
                            <form action="/tambah-khasiat" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_madu" value="<?= $khasiat['id_madu']; ?>">
                                <div class="card card-outline card-info">
                                    <div class="card-body">
                                        <textarea id="summernote" name="isi_khasiat"><?= $khasiat['isi_khasiat']; ?></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <a href="/admin-product" type="button" class="btn btn-default" data-dismiss="modal">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>