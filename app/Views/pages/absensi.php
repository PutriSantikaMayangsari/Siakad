<?= $this->extend('template') ?>
<?= $this->section('content') ?>

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
                                    <div class="col-md-4">
                                        <h3><b>Absensi Kelas</b></h3>
                                    </div>
                                    <div class="col-md-8"> <select id="periode" name="periode" class="form-control input-sm" onchange="goSubmit(this)">
                                            <option value="20221" selected>Kelas A</option>
                                            <option value="20221" selected>Kelas B</option>
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


                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <tr>
                                                <th>Mata Kuliah</th>
                                                <th>Kode Mata Kuliah</th>
                                                <th>SKS</th>
                                                <th>Dosen Pengajar</th>
                                                <th>Absensi</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>Logika</td>
                                            <td>SIKB716</td>
                                            <td>3 SKS</td>
                                            <td>Muhammad Ridho, M.Kom.</td>
                                            <td><a href="absensikelas" class="btn btn-success btn-flat">Absensi</a></td>
                                        </tr>
                                        <tr>
                                            <td>Dasar - Dasar Pemrograman</td>
                                            <td>SIKK7105</td>
                                            <td>3 SKS</td>
                                            <td> Muhammad Ridho, M.Kom.</td>
                                            <td><a href="" class="btn btn-success btn-flat">Absensi</a></td>
                                        </tr>
                                        <tr>
                                            <td>Struktur Data dan Algoritma</td>
                                            <td>SIKB112</td>
                                            <td>3 SKS</td>
                                            <td>Muhammad Ridho, M.Kom.</td>
                                            <td><a href="" class="btn btn-success btn-flat">Absensi</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
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

            <?= $this->endSection() ?>