<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
  <table class="table table-bordered table-striped dataTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NPM</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <th scope="row"><?= $no ?></th>
          <td><?= $mhs['npm'] ?></td>
          <td><?= $mhs['nama'] ?></td>
          <td><?= $mhs['alamat'] ?></td>
          <td><?= $mhs['deskripsi'] ?></td>
          <td><?= $mhs['created_at'] ?></td>
          <td><?= $mhs['updated_at'] ?></td>
          </td>
        </tr>
      <?php $no++;
      endforeach; ?>
    </tbody>
  </table>
  <div>
    <?= $this->endSection() ?>