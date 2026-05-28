<?= $this->extend('layout/v_template') ?>
<?php /** @var array $penggilingan */ ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-4 text-gray-800">Tambah Distribusi</h1>

<form action="<?= base_url('distributor/store') ?>" method="post">
    <div class="mb-3">
        <label>Kode Batch</label>
        <select name="penggilingan_id" class="form-control">
            <?php foreach($penggilingan as $p): ?>
            <option value="<?= $p['id'] ?>"><?= $p['kode_batch'] ?>-<?= $p['kualitas_beras'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Tujuan Distribusi</label>
        <input type="text" name="tujuan_distribusi" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tanggal Distribusi</label>
        <input type="date" name="tanggal_distribusi" class="form-control">
    </div>

    <div class="mb-3">
        <label>Status Distribusi</label>
        <input type="text" name="status_distribusi" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>