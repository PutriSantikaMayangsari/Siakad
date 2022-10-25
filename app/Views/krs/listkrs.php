<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="col-lg-8">
    <table>
        <tbody>
            <tr>
                <td>Nama</td>
                <td> : Putri Santika Mayangsari</td>
                <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td>Fakultas</td>
                <td> : FMIPA</td>
            </tr>
            <tr>
                <td>Npm</td>
                <td> : 2057051011</td>
                <td></td>
                <td>Jurusan</td>
                <td> : Ilmu Komputer</td>
            </tr>
            <tr>
                <td>Pemb. Akad.</td>
                <td> : Yunda Heningtyas</td>
                <td></td>
                <td>Prog.Studi</td>
                <td> : S1-Ilmu Komputer</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <a href="/createkrs" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>
    <div class="card">
        <div class="card-header">
            <form method="post" id="form_filter">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4"><label> Kartu Rencana Studi (KRS)</label></div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title">
                            <li class="pull-left header"><i class="fa fa-clock-o"></i> KRS</li>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Matkul</th>
                                    <th scope="col">Sks</th>
                                    <th scope="col">Smt</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Ruang</th>
                                    <th scope="col">Dosen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($krs as $kr) : ?>
                                    <tr>
                                        <th scope="row"><?= $no ?></th>
                                        <td><?= $kr['kode'] ?></td>
                                        <td><?= $kr['matkul'] ?></td>
                                        <td><?= $kr['sks'] ?></td>
                                        <td><?= $kr['smt'] ?></td>
                                        <td><?= $kr['kelas'] ?></td>
                                        <td><?= $kr['ruang'] ?></td>
                                        <td><?= $kr['dosen'] ?></td>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div>
    <?= $this->endSection() ?>
