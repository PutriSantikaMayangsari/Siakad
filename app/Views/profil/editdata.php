<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="p-4">
    <form action="/updateprofil/<?= $profil['id_profil'] ?>" method="post">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" name="npm" class="form-control" id="npm" value="<?= $profil['npm'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">NAMA</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $profil['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input type="text" name="prodi" class="form-control" id="prodi" value="<?= $profil['prodi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="jalur" class="form-label">Jalur</label>
                    <select name="jalur" class="form-control" id="jalur" value="<?= $profil['jalur'] ?>" required>
                        <option value="">-- Pilih --</option>
                        <option value="SNMPTN">SNMPTN</option>
                        <option value="SBMPTN">SBMPTN</option>
                        <option value="MANDIRI">MANDIRI</option>
                        <option value="PRESTASI">PRESTASI</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select name="jk" class="form-control" id="jk" value="<?= $profil['jk'] ?>" required>
                        <option value="">-- Pilih --</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tlahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tlahir" class="form-control" id="tlahir" value="<?= $profil['tlahir'] ?>">

                </div>
                <div class="mb-3">
                    <label for="tmptlahir" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tmptlahir" class="form-control" id="tmptlahir" value="<?= $profil['tmptlahir'] ?>">

                </div>
                <div class="mb-3">
                    <label for="goldar" class="form-label">Golongan Darah</label>
                    <select name="goldar" class="form-control" id="goldar" value="<?= $profil['goldar'] ?>" required>
                        <option value="">-- Pilih --</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ayah" class="form-label">Ayah</label>
                    <input type="text" name="ayah" class="form-control" id="ayah" value="<?= $profil['ayah'] ?>">

                </div>
                <div class="mb-3">
                    <label for="ibu" class="form-label">Ibu</label>
                    <input type="text" name="ibu" class="form-control" id="ibu" value="<?= $profil['ibu'] ?>">

                </div>
                <div class="mb-3">
                    <label for="penghasilanayah" class="form-label">Penghasilan Ayah</label>
                    <select name="penghasilanayah" class="form-control" id="penghasilanayah" value="<?= $profil['penghasilanayah'] ?>" required>
                        <option value="">-- Pilih --</option>
                        <option value="0-1JT">0-1JT</option>
                        <option value="1-3JT">1-3JT</option>
                        <option value="3-5JT">3-5JT</option>
                        <option value=">5JT">>5JT</option>
                        <option value="Tanpa Penghasilan">Tanpa Penghasilan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="penghasilanibu" class="form-label">Penghasilan Ibu</label>
                    <select name="penghasilanibu" class="form-control" id="penghasilanibu" value="<?= $profil['penghasilanibu'] ?>" required>
                        <option value="">-- Pilih --</option>
                        <option value="0-1JT">0-1JT</option>
                        <option value="1-3JT">1-3JT</option>
                        <option value="3-5JT">3-5JT</option>
                        <option value=">5JT">>5JT</option>
                        <option value="Tanpa Penghasilan">Tanpa Penghasilan</option>
                    </select>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pendidikan" class="form-label">Pendidikan</label>
                    <select name="pendidikan" class="form-control" id="pendidikan" value="<?= $profil['pendidikan'] ?>" required>
                        <option value="">-- Pilih --</option>
                        <option value="SD - Sekolah Dasar">SD - Sekolah Dasar</option>
                        <option value="SMP - SMP/Sederajat">SMP - SMP/Sederajat</option>
                        <option value="SMA - SMA/SMK/Sederajat">SMA - SMA/SMK/Sederajat</option>
                        <option value="D3 - diploma tiga">D3 - diploma tiga</option>
                        <option value="D4 - diploma empat">D4 - diploma empat</option>
                        <option value="S1 - sarjana">S1 - sarjana</option>
                        <option value="S2 - magister">S2 - magister</option>
                        <option value="S3 - doktoral">S3 - doktoral</option>
                        <option value="SP1 - profesi">SP1 - profesi</option>
                        <option value="Spes1 - spesialis">Spes1 - spesialis</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $profil['alamat'] ?>">

                </div>
                <div class="mb-3">
                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                    <select name="kewarganegaraan" class="form-control" id="kewarganegaraan" value="<?= $profil['kewarganegaraan'] ?>" required>
                        <option value="">-- Pilih --</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Canada">Canada</option>
                        <option value="Korea Selatan">Korea Selatan</option>
                        <option value="Tiongkok">Tiongkok</option>
                        <option value="Jepang">Jepang</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode Pos</label>
                    <input type="text" name="kode" class="form-control" id="kode" value="<?= $profil['kode'] ?>">

                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status Tinggal</label>
                    <input type="text" name="status" class="form-control" id="status" value="<?= $profil['status'] ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>
