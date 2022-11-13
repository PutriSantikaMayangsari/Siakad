<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="col-lg-12">
    <div class="card">
        <div class="container">
            <div class="navbar-custom-menu"></div>
            <br>
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <?php $no = 1;
                foreach ($profil as $dm) : ?>
                    <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/editprofil/<?= $dm['id_profil'] ?>"><i class="fa fa-edit"></i> Edit</a>
                    </div>
                <?php $no++;
                endforeach; ?>
            </ul>
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
                                                <th scope="col"></th>
                                                <td><?= $dm['prodi'] ?></td>
                                                <th scope="col"></th>
                                                <td><?= $dm['jalur'] ?></td>
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
                                                <th scope="col"></th>
                                                <td><?= $dm['jk'] ?></td>
                                                <th scope="col"></th>
                                                <td><?= $dm['tlahir'] ?></td>
                                            <tr>
                                                <th scope="col"></th>
                                                <td><?= $dm['tmptlahir'] ?></td>
                                                <th scope="col"></th>
                                                <td><?= $dm['goldar'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col"></th>
                                                <td><?= $dm['kewarganegaraan'] ?></td>
                                                <th scope="col"></th>
                                                <td><?= $dm['kode'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col"></th>
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
                                                <th scope="col"></th>
                                                <td><?= $dm['ayah'] ?></td>
                                                <th scope="col"></th>
                                                <td><?= $dm['ibu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col"></th>
                                                <td><?= $dm['penghasilanayah'] ?></td>
                                                <th scope="col"></th>
                                                <td><?= $dm['penghasilanibu'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col"></th>
                                                <td><?= $dm['pendidikan'] ?></td>
                                                <th scope="col"></th>
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
