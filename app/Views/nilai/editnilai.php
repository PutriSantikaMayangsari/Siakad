<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form class="mx-5" action="/updatenilai/<?= $nilai['id'] ?>" method="post">
        <div class="form-group">
            <label for="npm">NPM Mahasiswa</label>
            <input type="number" class="form-control" id="npm" name="npm" value="<?= $nilai['npm'] ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $nilai['nama']; ?>">
        </div>
        <div class="form-group">
            <label for="kode">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kode" name="kode" value="<?= $nilai['kode']; ?>">
        </div>
        <div class="form-group">
            <label for="matkul">Mata Kuliah</label>
            <input type="text" class="form-control" id="matkul" name="matkul" value="<?= $nilai['matkul']; ?>">
        </div>
        <div class="form-group">
            <label for="sks">SKS</label>
            <input type="text" class="form-control" id="sks" name="sks" value="<?= $nilai['sks']; ?>">
        </div>
        <div class="form-group">
            <label for="nilaimutu">Nilai Mutu</label>
            <input type="text" class="form-control" id="nilaimutu" name="nilaimutu" value="<?= $nilai['nilaimutu']; ?>">
        </div>
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="text" class="form-control" id="nilai" name="nilai" value="<?= $nilai['nilai']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?= $this->endSection() ?>