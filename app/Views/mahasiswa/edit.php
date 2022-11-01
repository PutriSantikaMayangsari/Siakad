<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form class="mx-5" action="/update/<?= $mahasiswa['id'] ?>" method="post">
        <div class="form-group">
            <label for="npm">NPM Mahasiswa</label>
            <input type="number" class="form-control" id="npm" name="npm" value="<?= $mahasiswa['npm'] ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat Mahasiswa</label>
            <textarea type="text" class=" form-control" id="alamat" rows="3" name="alamat"><?= $mahasiswa['alamat']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="deskripsi" class="form-label">Deskripsi Mahasiswa</label>
            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi"><?= $mahasiswa['deskripsi'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?= $this->endSection() ?>