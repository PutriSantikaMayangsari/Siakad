<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="col-lg-8">
    <a href="/createabsen" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>
    <br>
    <form class="form-inline" method="post" id="form_filter">
        <div class="form-group">
            <label for="periode" style="margin-right:10px">Periode</label>
            <select id="periode" name="periode" class="form-control" onchange="goSubmit(this)">
                <option value="20221" selected>2022 Ganjil</option>
            </select>
        </div>
    </form>
    <br>
    <form method="post" id="form_filter">
        <div class="panel-body">
        </div>
    </form>
</div>

<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">

            <div class="card-body">
                <table class="table table-bordered table-striped dataTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Hari & Tanggal</th>
                            <th scope="col">Keterangan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($absen as $bsn) : ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $bsn['npm'] ?></td>
                                <td><?= $bsn['nama'] ?></td>
                                <td><?= $bsn['tanggal'] ?></td>
                                <td><?= $bsn['keterangan'] ?></td>

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