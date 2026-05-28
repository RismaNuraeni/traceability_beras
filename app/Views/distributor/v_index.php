<?= $this->extend('layout/v_template') ?>

<?php /** @var array $distribusi */ ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    Data Distribusi
</h1>

<table class="table table-bordered">

    <thead>

        <a href="<?= base_url('distributor/create') ?>"
            class="btn btn-primary mb-3">

            Tambah Distribusi

        </a>

        <tr>

            <th>No</th>
            <th>Kode Batch</th>
            <th>Kualitas Beras</th>
            <th>Tujuan Distribusi</th>
            <th>Tanggal Distribusi</th>
            <th>Status</th>
            <th>Aksi</th>
            <th>QR Code</th>

        </tr>

    </thead>

    <tbody>

        <?php $no = 1; ?>

        <?php foreach ($distribusi as $d): ?>

            <tr>

                <td><?= $no++ ?></td>

                <td><?= $d['kode_batch'] ?></td>

                <td><?= $d['kualitas_beras'] ?></td>

                <td><?= $d['tujuan_distribusi'] ?></td>

                <td><?= $d['tanggal_distribusi'] ?></td>

                <td><?= $d['status_distribusi'] ?></td>

                <td>

                    <a href="<?= base_url('distributor/edit/' . $d['id']) ?>"
                        class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <a href="<?= base_url('distributor/delete/' . $d['id']) ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus data?')">

                        Delete

                    </a>

                </td>

                <td class="text-center">

                    <img
                        src="<?= base_url(
                                    'traceability/qr/' .
                                        $d['kode_batch']
                                ) ?>"
                        width="100">

                    <br><br>

                    <a
                        href="<?= base_url(
                                    'traceability/qr/' .
                                        $d['kode_batch']
                                ) ?>"
                        download="QR-<?= $d['kode_batch'] ?>.png"
                        class="btn btn-success btn-sm">

                        Download QR

                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

    </tbody>

</table>

<?= $this->endSection() ?>