<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/storekrs" method="post">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" name="kode" class="form-control" id="kode">
                </div>
                <div class="mb-3">
                    <label for="matkul" class="form-label">Matkul</label>
                    <input type="text" name="matkul" class="form-control" id="matkul">
                </div>
                <div class="mb-3">
                    <label for="sks" class="form-label">Sks</label>
                    <input type="text" name="sks" class="form-control" id="sks">
                </div>
                <div class="mb-3">
                    <label for="smt" class="form-label">Smt</label>
                    <input type="text" name="smt" class="form-control" id="smt">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas">
                </div>
                <div class="mb-3">
                    <label for="ruang" class="form-label">Ruang</label>
                    <input type="text" name="ruang" id="ruang" cols="30" rows="10" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dosen" class="form-label">Dosen</label>
                    <input type="text" name="dosen" id="dosen" cols="30" rows="10" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
    </form>
</div>
<?= $this->endSection() ?>
