<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="col-lg-12">
    <div class="card">
        <div class="container">
            <br>
            <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-8">
                <?php $no = 1;
                foreach ($profil as $dm) : ?>
                    <div class="d-flex">
                        <a class="btn btn-warning float-right" ><i class="fa fa-edit"></i> Edit</a>
                    </div>
                <?php $no++;
                endforeach; ?>
            </div>
            <br>

            <div class="col-md-16">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-berita-tab" data-toggle="tab" href="#custom-tabs-one-berita" role="tab" aria-controls="custom-tabs-one-berita" aria-selected="true">Informasi Umum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-vm-tab" data-toggle="tab" href="#custom-tabs-one-vm" role="tab" aria-controls="custom-tabs-one-vm" aria-selected="false">Domisili</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-dm-tab" data-toggle="tab" href="#custom-tabs-one-dm" role="tab" aria-controls="custom-tabs-one-dm" aria-selected="false">Orangtua</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-berita" role="tabpanel" aria-labelledby="custom-tabs-one-berita-tab">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <?php $no = 1;
                                            foreach ($profil as $dm) : ?>
                                                <tr>
                                                    <th scope="col">Npm</th>
                                                    <td><?= $dm['npm'] ?></td>
                                                    <th scope="col">Nama</th>
                                                    <td><?= $dm['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Prodi</th>
                                                    <td><?= $dm['prodi'] ?></td>
                                                    <th scope="col">Jalur</th>
                                                    <td><?= $dm['jalur'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <td><?= $dm['jk'] ?></td>
                                                </tr>
                                            <?php $no++;
                                            endforeach; ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="custom-tabs-one-vm" role="tabpanel" aria-labelledby="custom-tabs-one-vm-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <?php $no = 1;
                                            foreach ($profil as $dm) : ?>
                                                <tr>
                                                    <th scope="col">Tempat Lahir</th>
                                                    <td><?= $dm['tmptlahir'] ?></td>
                                                    <th scope="col">Tanggal Lahir</th>
                                                    <td><?= $dm['tlahir'] ?></td>
                                                <tr>
                                                    <th scope="col">Kewarganegaraan</th>
                                                    <td><?= $dm['kewarganegaraan'] ?></td>
                                                    <th scope="col">Gol.Darah</th>
                                                    <td><?= $dm['goldar'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Kode Pos</th>
                                                    <td><?= $dm['kode'] ?></td>
                                                    <th scope="col">Status Tinggal</th>
                                                    <td><?= $dm['status'] ?></td>
                                                </tr>
                                            <?php $no++;
                                            endforeach; ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="custom-tabs-one-dm" role="tabpanel" aria-labelledby="custom-tabs-one-dm-tab">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <?php $no = 1;
                                            foreach ($profil as $dm) : ?>
                                                <tr>
                                                    <th scope="col">Nama Ayah</th>
                                                    <td><?= $dm['ayah'] ?></td>
                                                    <th scope="col">Nama Ibu</th>
                                                    <td><?= $dm['ibu'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Penghasilan Ayah</th>
                                                    <td><?= $dm['penghasilanayah'] ?></td>
                                                    <th scope="col">Penghasilan Ibu</th>
                                                    <td><?= $dm['penghasilanibu'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Pendidikan</th>
                                                    <td><?= $dm['pendidikan'] ?></td>
                                                    <th scope="col">Alamat</th>
                                                    <td><?= $dm['alamat'] ?></td>
                                                </tr>
                                            <?php $no++;
                                            endforeach; ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection() ?>
