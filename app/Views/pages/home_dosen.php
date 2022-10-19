<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>1</h3>

                        <p>Mata Kuliah Semester Ganjil</p>
                    </div>
                    <div class="icon"><i class="ion ion-ribbon-b"></i></div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Bahan Ajar</p>
                    </div>
                    <div class="icon"><i class="ion ion-ios7-bookmarks"></i></div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>3</h3>

                        <p>Mahasiswa Bimbingan</p>
                    </div>
                    <div class="icon"><i class="ion ion-starh"></i></div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <br>
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
                                                <li class="pull-left header"><i class="fa fa-clock-o"></i> Jadwal Mengajar Anda Hari Ini</li>
                                            </h3>
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
                                                <tr>
                                                    <td>1. Senin, 07.30 - 09.20 WIB</td>
                                                    <td>Kuliah</td>
                                                    <td>Logika</td>
                                                    <td><span class="badge bg-success">GIK L1C</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2. Senin, 09.20 - 11.10 WIB</td>
                                                    <td>Kuliah</td>
                                                    <td>Sains Dasar</td>
                                                    <td><span class="badge bg-success">GIK L2A</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3. Senin, 11.10 - 12.50 WIB</td>
                                                    <td>Kuliah</td>
                                                    <td>Aljabar Linier</td>
                                                    <td><span class="badge bg-success">LAB R1&R2</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4. Senin, 13.30 - 15.10 WIB</td>
                                                    <td>Kuliah</td>
                                                    <td>Struktur Data dan Algoritma</td>
                                                    <td><span class="badge bg-success">GIK L1A</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="card-header">
                                            <h3 class="card-title">
                                            </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped dataTable">
                                                <thead>

                                            </table>
                                        </div>
                                    </div>
                                </section>
                                <!-- right col -->
                            </div>
                            <!-- /.row (main row) -->
                        </div><!-- /.container-fluid -->
                    </div>

                    <div class="col-md-4">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-berita-tab" data-toggle="pill" href="#custom-tabs-one-berita" role="tab" aria-controls="custom-tabs-one-berita" aria-selected="true">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-vm-tab" data-toggle="pill" href="#custom-tabs-one-vm" role="tab" aria-controls="custom-tabs-one-vm" aria-selected="false">Task</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-berita" role="tabpanel" aria-labelledby="custom-tabs-one-berita-tab">
                                        <!-- /.card-header -->
                                        <div class="card-body">
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
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-vm" role="tabpanel" aria-labelledby="custom-tabs-one-vm-tab">

                                        <P>
                                            Belum ada tugas yang diberikan! </p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->

                        </div>
                    </div>
        </section>
        <!-- /.content -->
    </div>
</section>

<?= $this->endSection() ?>