<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <a href="/createdosen" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah</a>
    <table class="table table-bordered table-striped dataTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($dosen as $dsn) : ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $dsn['nip'] ?></td>
                    <td><?= $dsn['nama'] ?></td>
                    <td><?= $dsn['prodi'] ?></td>
                    <td><?= $dsn['deskripsi'] ?></td>
                    <td><?= $dsn['created_at'] ?></td>
                    <td><?= $dsn['updated_at'] ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning mr-3" href="/editdosen/<?= $dsn['id'] ?>"><i class="fa fa-edit"></i> Edit</a>
                            <form action="/deletedosen/<?= $dsn['id'] ?>" method="post">
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