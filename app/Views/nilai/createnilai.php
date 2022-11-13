<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/storenilai" method="post">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" name="npm" class="form-control" id="npm">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode Mata kuliah</label>
                    <input type="text" name="kode" class="form-control" id="kode">
                </div>
                <div class="mb-3">
                    <label for="matkul" class="form-label">Mata Kuliah</label>
                    <input type="text" name="matkul" class="form-control" id="matkul">
                </div>
                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input type="text" name="sks" class="form-control" id="sks">
                </div>
                <div class="mb-3">
                    <label for="nilaimutu" class="form-label">Nilai Mutu</label>
                    <input type="text" name="nilaimutu" class="form-control" id="nilaimutu">
                </div>
                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai</label>
                    <input type="text" name="nilai" class="form-control" id="nilai">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
    </form>

    <?= $this->endSection() ?>