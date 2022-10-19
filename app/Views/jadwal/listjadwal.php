<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <form method="post" id="form_filter">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4"><label>Periode Akademik</label></div>
                        <div class="col-md-8"> <select id="periode" name="periode" class="form-control input-sm" onchange="goSubmit(this)">
                                <option value="20221" selected>2022 Ganjil</option>
                            </select></div>
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
                            <li class="pull-left header"><i class="fa fa-clock-o"></i> Jadwal</li>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal & Waktu</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Mata Kuliah</th>
                                    <th scope="col">Ruang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jadwal as $jwd) : ?>
                                    <tr>
                                        <th scope="row"><?= $no ?></th>
                                        <td><?= $jwd['waktu'] ?></td>
                                        <td><?= $jwd['jenis'] ?></td>
                                        <td><?= $jwd['matkul'] ?></td>
                                        <td><span class="badge bg-success"><?= $jwd['ruang'] ?></span></td>
                                        <td>
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
