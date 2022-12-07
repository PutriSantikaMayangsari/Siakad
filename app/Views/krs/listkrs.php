<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="col-lg-8">
    <a href="/createkrs" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>
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
                            <th scope="col">Kode</th>
                            <th scope="col">Matkul</th>
                            <th scope="col">SKS</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Ruang</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Action</th>
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
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-warning mr-3" href="/editkrs/<?= $kr['id'] ?>"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="/deletekrs/<?= $kr['id'] ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </div>
                                </td>
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