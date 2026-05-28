<?= $this->extend('layout/v_template') ?>
<?php /** @var array $panen */ ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Edit Data Panen</h1>

<form action="<?= base_url('petani/update/' . $panen['id']) ?>" method="post">
    <div class="form-group">
        <label for="kode_batch">Kode Batch</label>
        <input type="text" class="form-control" id="kode_batch" name="kode_batch" value="<?= $panen['kode_batch'] ?>" required>
    </div>
    <div class="form-group">
        <label for="lokasi_sawah">Lokasi Sawah</label>
        <input type="text" class="form-control" id="lokasi_sawah" name="lokasi_sawah" value="<?= $panen['lokasi_sawah'] ?>" required>
    </div>
    <div class="form-group">
        <label for="jenis_padi">Jenis Padi</label>
        <input type="text" class="form-control" id="jenis_padi" name="jenis_padi" value="<?= $panen['jenis_padi'] ?>" required>
    </div>
    <div class="form-group">
        <label for="tanggal_panen">Tanggal Panen</label>
        <input type="date" class="form-control" id="tanggal_panen" name="tanggal_panen" value="<?= $panen['tanggal_panen'] ?>" required>
    </div>
    <div class="form-group">
        <label for="jumlah_panen">Jumlah Panen</label>
        <input type="number" class="form-control" id="jumlah_panen" name="jumlah_panen" value="<?= $panen['jumlah_panen'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>
