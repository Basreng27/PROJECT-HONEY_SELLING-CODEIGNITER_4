<?= $this->extend('Pages\Static\Layout_admins\layout_admins'); ?>

<?= $this->section('content_admin'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success" role="alert">
            Product Berhasil ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasilUpdate')) { ?>
        <div class="alert alert-success" role="alert">
            Product Berhasil diupdate
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('delete')) { ?>
        <div class="alert alert-success" role="alert">
            Product Berhasil didelete
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger" role="alert">
            Product gagal ditambahkan
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
                            <h3 class="card-title">Data Product</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="float: right">
                                Tambah Product
                            </button>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Image</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Sisa</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_products as $data) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data['nama_madu']; ?></td>
                                            <td><img src="/products/<?= $data['image'] ?>" class="image" width="80" height="60"></td>
                                            <td><?= $data['deskripsi']; ?></td>
                                            <td><?= $data['harga']; ?></td>
                                            <td><?= $data['sisa']; ?></td>
                                            <td><?= $data['stock']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-keranjang" data-toggle="modal" data-target="#modal-edit<?= $data['id_madu']; ?>">Edit</a>
                                                ||
                                                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-keranjang" data-toggle="modal" data-target="#modal-delete<?= $data['id_madu']; ?>">Delete</a>
                                                <!-- <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-danger"> Delete</a> -->
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

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/tambah-product" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Madu</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama_madu')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" name="nama_madu" value="<?= old('nama_madu'); ?>" placeholder="Enter email" autofocus>
                        <div class="invalid-feedback"><?= $validation->getError('nama_madu'); ?></div>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" id="exampleInputFile" name="image" onchange="prevGambar()">
                            <div class="invalid-feedback"><?= $validation->getError('image'); ?></div>
                            <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                        </div>
                        <img src="/products/default.jpg" class="img-thumbnail img-preview">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" rows="3" placeholder="Masukan Deskripsi ..." value="<?= old('deskripsi'); ?>" name="deskripsi"></textarea>
                        <div class="invalid-feedback"><?= $validation->getError('deskripsi'); ?></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <input type="number" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" placeholder="Masukan Harga" value="<?= old('harga'); ?>" name="harga">
                        <div class="invalid-feedback"><?= $validation->getError('harga'); ?></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Sisa Barang</label>
                        <input type="number" class="form-control <?= ($validation->hasError('sisa')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" placeholder="Masukan Sisa Barang" value="<?= old('sisa'); ?>" name="sisa">
                        <div class="invalid-feedback"><?= $validation->getError('sisa'); ?></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Stock Barang</label>
                        <input type="number" class="form-control <?= ($validation->hasError('stock')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" placeholder="Masukan Stock Barang" value="<?= old('stock'); ?>" name="stock">
                        <div class="invalid-feedback"><?= $validation->getError('stock'); ?></div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php foreach ($data_products as $product) : ?>
    <div class="modal fade" id="modal-edit<?= $product['id_madu']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="/update-product" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id_madu" value="<?= $product['id_madu']; ?>">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Madu</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_madu')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" name="nama_madu" value="<?= $product['nama_madu']; ?>" placeholder="Enter email" autofocus>
                            <div class="invalid-feedback"><?= $validation->getError('nama_madu'); ?></div>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" id="exampleInputFile" name="image" onchange="prevGambar()">
                                <input type="hidden" name="image_lama" value="<?= $product['image']; ?>">
                                <div class="invalid-feedback"><?= $validation->getError('image'); ?></div>
                                <label class="custom-file-label" for="exampleInputFile">Pilih file untuk diupdate</label>
                            </div>
                            <img src="/products/<?= $product['image']; ?>" class="img-thumbnail img-preview">
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" rows="3" placeholder="Masukan Deskripsi ..." name="deskripsi"><?= $product['deskripsi']; ?></textarea>
                            <div class="invalid-feedback"><?= $validation->getError('deskripsi'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="number" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" placeholder="Masukan Harga" value="<?= $product['harga']; ?>" name="harga">
                            <div class="invalid-feedback"><?= $validation->getError('harga'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Sisa Barang</label>
                            <input type="number" class="form-control <?= ($validation->hasError('sisa')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" placeholder="Masukan Sisa Barang" value="<?= $product['sisa']; ?>" name="sisa">
                            <div class="invalid-feedback"><?= $validation->getError('sisa'); ?></div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Stock Barang</label>
                            <input type="number" class="form-control <?= ($validation->hasError('stock')) ? 'is-invalid' : ''; ?>" id="exampleInputEmail1" placeholder="Masukan Stock Barang" value="<?= $product['stock']; ?>" name="stock">
                            <div class="invalid-feedback"><?= $validation->getError('stock'); ?></div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach ?>

<?php foreach ($data_products as $productdel) : ?>
    <div class="modal fade" id="modal-delete<?= $productdel['id_madu']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- <form action="/delete-product/<?= $productdel['id_madu']; ?>" method="POST"> -->
                <form action="/delete-product" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="id_madu" value="<?= $productdel['id_madu']; ?>">
                        Apakah kamu yakin akan <strong>menghapus</strong> product <?= $productdel['nama_madu']; ?>?
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach ?>
<?= $this->endSection(); ?>