<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <a href="/createnilai" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>
    <table class="table table-bordered table-striped dataTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Kode Mata Kuliah</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Nilai Mutu</th>
                <th scope="col">Nilai</th>
                <th scope="col">Created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($nilai as $nl) : ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $nl['npm'] ?></td>
                    <td><?= $nl['nama'] ?></td>
                    <td><?= $nl['kode'] ?></td>
                    <td><?= $nl['matkul'] ?></td>
                    <td><?= $nl['sks'] ?></td>
                    <td><?= $nl['nilaimutu'] ?></td>
                    <td><?= $nl['nilai'] ?></td>
                    <td><?= $nl['created_at'] ?></td>
                    <td><?= $nl['updated_at'] ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning mr-3" href="/editnilai/<?= $nl['id'] ?>"><i class="fa fa-edit"></i> Edit</a>
                            <form action="/deletenilai/<?= $nl['id'] ?>" method="post">
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