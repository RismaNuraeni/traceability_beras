<?= $this->extend('layout/v_template') ?>

<?php /** @var array $panen */ ?>
<?php /** @var array $penggilingan */ ?>
<?php /** @var array $distribusi */ ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    Edit Distribusi
</h1>

<form action="<?= base_url(
    'distributor/update/'.$distribusi['id']
) ?>" method="post">

    <div class="mb-3">

        <label>Kode Batch</label>

        <select name="penggilingan_id"
        class="form-control">

            <?php foreach($penggilingan as $p): ?>

            <option value="<?= $p['id'] ?>"

            <?= $p['id'] == $distribusi['penggilingan_id']
                ? 'selected' : '' ?>>

                <?= $p['kode_batch'] ?>

            </option>

            <?php endforeach; ?>

        </select>

    </div>

    <div class="mb-3">

        <label>Tujuan Distribusi</label>

        <input type="text"
        name="tujuan_distribusi"
        class="form-control"
        value="<?= $distribusi['tujuan_distribusi'] ?>">

    </div>

    <div class="mb-3">

        <label>Tanggal Distribusi</label>

        <input type="date"
        name="tanggal_distribusi"
        class="form-control"
        value="<?= $distribusi['tanggal_distribusi'] ?>">

    </div>

    <div class="mb-3">

        <label>Status Distribusi</label>

        <input type="text"
        name="status_distribusi"
        class="form-control"
        value="<?= $distribusi['status_distribusi'] ?>">

    </div>

    <button type="submit"
    class="btn btn-primary">

        Update

    </button>

</form>

<?= $this->endSection() ?>