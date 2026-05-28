<?= $this->extend('layout/v_template') ?>
<?php /** @var array $penggilingan */ ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Data Penggiling</h1>

<a href="<?= base_url('penggilingan/create') ?>" class="btn btn-primary mb-3">Tambah Data Penggiling</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Batch</th>
            <th>Tanggal Giling</th>
            <th>Kualitas</th>
            <th>Catatan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($penggilingan as $p): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $p['kode_batch'] ?></td>
                <td><?= $p['tanggal_giling'] ?></td>
                <td><?= $p['kualitas_beras'] ?></td>
                <td><?= $p['catatan'] ?></td>
                <td>
                    <a href="<?= base_url('penggilingan/edit/' . $p['id']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('penggilingan/delete/' . $p['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>