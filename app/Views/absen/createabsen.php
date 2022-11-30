<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/storeabsen" method="post">
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
                    <label for="tanggal" class="form-label">Hari & Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" id="tanggal">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
    </form>
</div>
<?= $this->endSection() ?>