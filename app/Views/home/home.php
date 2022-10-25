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
                        <h3>0</h3>

                        <p>IPK</p>
                    </div>
                    <div class="icon"><i class="ion ion-ribbon-b"></i></div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
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
            <div class="col-lg-4 col-6">
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
                                                <li class="pull-left header"><i class="fa fa-clock-o"></i> Monitoring Perkuliahan</li>
                                            </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped dataTable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Mata Kuliah</th>
                                                        <th scope="col">Kelas</th>
                                                        <th scope="col">Absensi</th>
                                                        <th scope="col">Nilai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($jadwal as $jwd) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $no ?></th>
                                                            <td><?= $jwd['matkul'] ?></td>
                                                            <td><?= $jwd['kelas'] ?></td>
                                                            <td><?= $jwd['absensi'] ?>/16</td>
                                                            <td><span class="badge bg-success"><?= $jwd['nilai'] ?></span></td>
                                                            </td>
                                                        </tr>
                                                    <?php $no++;
                                                    endforeach; ?>
                                                </tbody>
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
                                        <a class="nav-link" id="custom-tabs-one-vm-tab" data-toggle="pill" href="#custom-tabs-one-vm" role="tab" aria-controls="custom-tabs-one-vm" aria-selected="false">Visi Misi</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-berita" role="tabpanel" aria-labelledby="custom-tabs-one-berita-tab">
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
                                                <section class="content">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                                                Validasi KRS
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="modal-default">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Validasi KRS</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p> Kepada para mahasiswa, dimohon kiranya untuk mencek apakah KRS sudah divalidasi atau belum.
                                                                        Jika KRS belum divalidasi, mahasiswa dapat menghubungi PA masing-masing, atau alternatif lain,
                                                                        dapat menghubungi program studi/jurusan. Seandainya KRS belum divalidasi,
                                                                        maka dosen mata kuliah tidak dapat mengisi nilai untuk mahasiswa tersebut.
                                                                        Terima kasih&hellip;</p>
                                                                </div>
                                                                <div class="modal-footer ">
                                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                </section>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-vm" role="tabpanel" aria-labelledby="custom-tabs-one-vm-tab">
                                        <h5><b>VISI</b></h5>
                                        <P>
                                            Pada Tahun 2025 Menjadi Program Studi Ilmu Komputer Yang Unggul Dalam Pendidikan Dan Penelitian Bidang Komputer dan Informatika, Serta Berprestasi Di Tingkat Nasional dan Internasional
                                        </P>
                                        <br>
                                        <h5><b>MISI</b></h5>
                                        <P> - </P>
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
