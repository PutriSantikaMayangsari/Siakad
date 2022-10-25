<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <a href="/createjadwal" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>
    <table class="table table-bordered table-striped dataTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal & Waktu</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Ruang Kuliah</th>
                <th scope="col">Action</th>
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
                    <td><?= $jwd['ruang'] ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning mr-3" href="/editjadwal/<?= $jwd['id'] ?>"><i class="fa fa-edit"></i> Edit</a>
                            <form action="/deletejadwal/<?= $jwd['id'] ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
    <div>
        <?= $this->endSection() ?>