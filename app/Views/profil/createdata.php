<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Profil Mahasiswa</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" name="npm" class="form-control" id="npm" disabled="disabled">

                        </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="npm" class="form-label">Nama</label>
                            <input type="text" name="npm" class="form-control" id="npm">
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <h5>Informasi Umum</h5>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="prodi" class="form-label">JENIS KELAMIN</label>
                            <input type="text" name="prodi" class="form-control" id="prodi">
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label">TANGGAL LAHIR</label>
                            <input type="text" name="prodi" class="form-control" id="prodi">
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label">TEMPAT LAHIR</label>
                            <input type="text" name="prodi" class="form-control" id="prodi">
                        </div>
                        <div class="mb-3">
                            <label for="prodi" class="form-label">GOL.DARAH</label>
                            <input type="text" name="prodi" class="form-control" id="prodi">
                        </div>
                        <!-- /.form-group -->
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                    the plugin.
                </div>
            </div>
            <!-- /.card -->

            <div class="p-4">
                <form action="/storedata" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="npm" class="form-label">NPM</label>
                                <input type="text" name="npm" class="form-control" id="npm">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">NAMA</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">PRODI</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">JALUR</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">JENIS KELAMIN</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">TANGGAL LAHIR</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">TEMPAT LAHIR</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">GOLDA</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">TEMPAT LAHIR</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="prodi" class="form-label">TEMPAT LAHIR</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">TEMPAT LAHIR</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">TEMPAT LAHIR</label>
                                <input type="text" name="prodi" class="form-control" id="prodi">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                </form>
            </div>
            <?= $this->endSection() ?>
