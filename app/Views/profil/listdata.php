<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form method="post" id="form_filter">
                <div class="panel-body">
                    <br>
                    <a href="/createdata" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="/editdata" type="button" class="btn btn-warning mb-3"><i class="fa fa-edit"></i> Edit</a>
                </div>
            </form>
        </div>

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <table class="table table-bordered table-striped dataTable">
                    <thead>
                        <tr>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Jalur</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">tanggal lahir</th>
                            <th scope="col">tempat lahir</th>
                            <th scope="col">gol.darah</th>
                            <th scope="col">nama ayah</th>
                            <th scope="col">nama ibu</th>
                            <th scope="col">Penghasilan ayah</th>
                            <th scope="col">Penghasilan ibu</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Alamat Rumah</th>
                            <th scope="col">Kewarganegaraan</th>
                            <th scope="col">Kode Post</th>
                            <th scope="col">Status Tinggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($profil as $dm) : ?>
                            <tr>
                                <td><?= $dm['npm'] ?></td>
                                <td><?= $dm['nama'] ?></td>
                                <td><?= $dm['prodi'] ?></td>
                                <td><?= $dm['jalur'] ?></td>
                                <td><?= $dm['jk'] ?></td>
                                <td><?= $dm['tlahir'] ?></td>
                                <td><?= $dm['tmptlahir'] ?></td>
                                <td><?= $dm['goldar'] ?></td>
                                <td><?= $dm['ayah'] ?></td>
                                <td><?= $dm['ibu'] ?></td>
                                <td><?= $dm['penghasilanayah'] ?></td>
                                <td><?= $dm['penghasilanibu'] ?></td>
                                <td><?= $dm['pendidikan'] ?></td>
                                <td><?= $dm['alamat'] ?></td>
                                <td><?= $dm['kewarganegaraan'] ?></td>
                                <td><?= $dm['kode'] ?></td>
                                <td><?= $dm['status'] ?></td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
<div>
    <?= $this->endSection() ?>
