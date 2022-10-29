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
                                    <tr>
                                        <td>1</td>
                                        <td>Madu Rasa</td>
                                        <td>gambar disini</td>
                                        <td>2000</td>
                                        <td>Madu Enak</td>
                                        <td>10</td>
                                        <td>15</td>
                                        <td>
                                            <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-keranjang" data-toggle="modal" data-target="#modal-lg">Edit</a>
                                            ||
                                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-keranjang">Delete</a>
                                        </td>
                                    </tr>
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

            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Madu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Masukan Deskripsi ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Sisa</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambahkan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= $this->endSection(); ?>