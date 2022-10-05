<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/store" method="post">
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
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
            </div>
            <div class="col-6">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
    </form>
</div>
<?= $this->endSection() ?>