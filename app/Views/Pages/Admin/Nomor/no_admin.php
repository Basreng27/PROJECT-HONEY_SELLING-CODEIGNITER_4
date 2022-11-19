<?= $this->extend('Pages\Static\Layout_admins\layout_admins'); ?>

<?= $this->section('content_admin'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nomor Admin</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php if (session()->getFlashdata('berhasilUpdate')) { ?>
        <div class="alert alert-success" role="alert">
            Nomor Whatsapp Berhasil diupdate
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger" role="alert">
            Nomor Whatsapp gagal diupdate
        </div>
    <?php } ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Nomor Admin</h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Whatsapp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_nomor as $data) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['no_wa']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-keranjang" data-toggle="modal" data-target="#modal-edit<?= $data['id_wa']; ?>">Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php foreach ($data_nomor as $nomor) : ?>
    <div class="modal fade" id="modal-edit<?= $nomor['id_wa']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Nomor Whatsapp</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="/update-nomor" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id_wa" value="<?= $nomor['id_wa']; ?>">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Whatsapp</label>
                            <h6>example : 62......(Awali dengan 62)</h6>
                            <input type="text" class="form-control <?= ($validation->hasError('no_wa')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" name="no_wa" value="<?= $nomor['no_wa']; ?>" placeholder="Depannya harus 62" autofocus>
                            <div class="invalid-feedback"><?= $validation->getError('no_wa'); ?></div>
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach ?>
<?= $this->endSection(); ?>