<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form class="mx-5" action="/updatedosen/<?= $dosen['id'] ?>" method="post">
        <div class="form-group">
            <label for="nip">NIP Dosen</label>
            <input type="number" class="form-control" id="nip" name="nip" value="<?= $dosen['nip'] ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama Dosen</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $dosen['nama']; ?>">
        </div>
        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <textarea type="text" class=" form-control" id="prodi" rows="3" name="prodi"><?= $dosen['prodi']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="deskripsi" class="form-label">Mata Kuliah</label>
            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi"><?= $dosen['deskripsi'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?= $this->endSection() ?>