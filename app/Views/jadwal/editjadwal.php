<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/updatejadwal/<?= $id ?>" method="post">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="waktu" class="form-label">WAKTU</label>
                    <input type="text" name="waktu" class="form-control" id="waktu" value="<?= $waktu ?>">
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label">JENIS</label>
                    <input type="text" name="jenis" class="form-control" id="jenis" value="<?= $jenis ?>">
                </div>
                <div class="mb-3">
                    <label for="matkul" class="form-label">MATKUL</label>
                    <input type="text" name="matkul" class="form-control" id="matkul" value="<?= $matkul ?>">
                </div>
            </div>
            <div class="col-6">
                <label for="ruang" class="form-label">RUANG</label>
                <textarea name="ruang" id="ruang" cols="30" rows="10" class="form-control"><?= $ruang ?></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div>
        <?= $this->endSection() ?>
