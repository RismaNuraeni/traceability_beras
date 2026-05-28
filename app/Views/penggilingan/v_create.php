<?= $this->extend('layout/v_template') ?>
<?php /** @var array $panen */ ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-4 text-gray-800">Tambah Penggilingan</h1>

<form action="<?= base_url('penggilingan/store') ?>" method="post">
    <div class="mb-3">
        <label>Kode Batch</label>
        <select name="panen_id" class="form-control">
            <?php foreach ($panen as $p): ?>
                <option value="<?= $p['id'] ?>"><?= $p['kode_batch'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Tanggal Giling</label>
        <input type="date" name="tanggal_giling" class="form-control">
    </div>
    <div class="mb-3">
        <label>Kualitas Beras</label>
        <input type="text" name="kualitas_beras" class="form-control">
    </div>
    <div class="mb-3">
        <label>Catatan</label>
        <textarea name="catatan" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>