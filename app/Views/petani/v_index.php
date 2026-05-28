<?= $this->extend('layout/v_template') ?>

<?php /** @var array $panen */ ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Data Panen</h1>

<a href="<?= base_url('petani/create') ?>" class="btn btn-primary mb-3">Tambah Data Panen</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Batch</th>
            <th>Lokasi Sawah</th>
            <th>Jenis Padi</th>
            <th>Tanggal Panen</th>
            <th>Jumlah Panen</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($panen as $p): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $p['kode_batch'] ?></td>
                <td><?= $p['lokasi_sawah'] ?></td>
                <td><?= $p['jenis_padi'] ?></td>
                <td><?= $p['tanggal_panen'] ?></td>
                <td><?= $p['jumlah_panen'] ?></td>
                <td>
                    <a href="<?= base_url('petani/edit/' . $p['id']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('petani/delete/' . $p['id']) ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

<?= $this->endSection() ?>
