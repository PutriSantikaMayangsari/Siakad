<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form class="mx-5" action="/updatejadwal/<?= $jadwal['id'] ?>" method="post">
        <div class="form-group">
            <label for="waktu">Tanggal & Waktu</label>
            <input type="text" class="form-control" id="waktu" name="waktu" value="<?= $jadwal['waktu'] ?>">
        </div>
        <div class="form-group">
            <label for="jenis">Nama Dosen</label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $jadwal['jenis']; ?>">
        </div>
        <div class="form-group">
            <label for="matkul">Mata Kuliah</label>
            <textarea type="text" class=" form-control" id="matkul" rows="3" name="matkul"><?= $jadwal['matkul']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="ruang" class="form-label">Ruang Kuliah</label>
            <textarea type="text" name="ruang" class="form-control" id="ruang"><?= $jadwal['ruang'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?= $this->endSection() ?>