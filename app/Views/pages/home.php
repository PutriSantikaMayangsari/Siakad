<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>0</h3>

                        <p>IPK</p>
                    </div>
                    <div class="icon"><i class="ion ion-ribbon-b"></i></div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>1</h3>

                        <p>Semester Saat Ini</p>
                    </div>
                    <div class="icon"><i class="ion ion-ios7-bookmarks"></i></div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Total SKS Lulus</p>
                    </div>
                    <div class="icon"><i class="ion ion-starh"></i></div>
                </div>
            </div>
            <!-- ./col -->
        </div>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
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
                                            <div class="card-tools">
                                                <ul class="nav nav-pills ml-auto">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Hari ini</a>
                                                    </li>
                                                    <br>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Besok</a>
                                                    </li>
                                                    <br>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Ujian</a>
                                                    </li>
                                                </ul>
                                                <div style="padding-left:5px;padding-right:5px;">
                                                    <div class="no-padding">
                                                        <div class="table-responsive">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal & Waktu</th>
                                                        <th>Jenis</th>
                                                        <th>Mata Kuliah</th>
                                                        <th>Ruang</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Kuliah</td>
                                                        <td> </td>
                                                        <td><span class="badge bg-success">GIK L1C</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>Kuliah</td>
                                                        <td> </td>
                                                        <td><span class="badge bg-success">GIK L2A</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>Kuliah</td>
                                                        <td> </td>
                                                        <td><span class="badge bg-success">LAB R1&R2</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Kuliah</td>
                                                        <td> </td>
                                                        <td><span class="badge bg-success">GIK L1A</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </section>
                                <!-- right col -->
                            </div>
                            <!-- /.row (main row) -->
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</section>

<div class="col-md-4">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab"><i class="fas fa-bullhorn"></i> Berita</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" href="#sales-chart" data-toggle="tab"><i class="fa fa-list-alt"></i> Visi Misi</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="callout callout-danger">
                <h4>Foto Profil Mahasiswa Angkatan 2022</h4>

                <p>Mahasiswa angkatan 2022 diwajibkan untuk mengunggah foto profil di Siakadu.</p>
            </div>
            <div class="callout callout-info">
                <h4>Perpanjangan Pengisian KRS Semester Ganjil 2022/2023</h4>

                <p>Pengisian KRS Semester Ganjil 2022/2023 diperpanjang sampai dengan tanggal 10 September 2022.
                    Bagi mahasiswa baru ataupun mahasiswa lama diharapkan sudah melakukan pengisian KRS pada waktu tersebut.
                    Terima kasih.</p>
            </div>
            <div class="callout callout-warning">
                <h4>Perpanjangan masa pengisian nilai Semester Genap 2021/2022</h4>

                <p>Sesuai dengan Surat Edaran Wakil Rektor Bidang Akademik Universitas Lampung Nomor
                    5603/UN26/PP/2022 tanggal 24 Juni 2022, maka pengisian nilai Siakadu dapat dilakukan
                    sampai dengan tanggal 2 Juli 2022.Terima kasih.</p>
            </div>
            <div class="callout callout-success">
                <h6><b>Berita Lain</b></h6>

                <a href="/validasikrs.php">Validasi KRS </a><br>
                <a href="/siakadandroid.php">Apk Siakadu untuk Android</a></p>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
<?= $this->endSection() ?>