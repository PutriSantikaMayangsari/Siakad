<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form class="mx-5" action="/updatekrs/<?= $krs['id'] ?>" method="post">
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode" value="<?= $krs['kode'] ?>">
        </div>
        <div class="form-group">
            <label for="matkul">Matkul</label>
            <input type="text" class="form-control" id="matkul" name="matkul" value="<?= $krs['matkul']; ?>">
        </div>
        <div class="form-group">
            <label for="sks">SKS</label>
            <input type="text" class="form-control" id="sks" name="sks" value="<?= $krs['sks']; ?>">
        </div>
        <div class="form-group">
            <label for="smt">Semester</label>
            <input type="text" class="form-control" id="smt" name="smt" value="<?= $krs['smt']; ?>">
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $krs['kelas']; ?>">
        </div>
        <div class="form-group">
            <label for="ruang">Ruang</label>
            <input type="text" class="form-control" id="ruang" name="ruang" value="<?= $krs['ruang']; ?>">
        </div>
        <div class="form-group">
            <label for="dosen">Dosen</label>
            <input type="text" class="form-control" id="dosen" name="dosen" value="<?= $krs['dosen']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?= $this->endSection() ?>