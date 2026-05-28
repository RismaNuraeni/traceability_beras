<?php /** @var array $traceability */ ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Traceability Beras</title>

    <link href=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

</head>

<body style="background:#f5f5f5;">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow border-0 rounded-4">

                <div class="card-body p-5">

                    <h2 class="text-center mb-4">

                        🌾 Detail Traceability

                    </h2>

                    <table class="table">

                        <tr>
                            <th>Kode Batch</th>
                            <td><?= $traceability['kode_batch'] ?></td>
                        </tr>

                        <tr>
                            <th>Lokasi Sawah</th>
                            <td><?= $traceability['lokasi_sawah'] ?></td>
                        </tr>

                        <tr>
                            <th>Jenis Padi</th>
                            <td><?= $traceability['jenis_padi'] ?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Panen</th>
                            <td><?= $traceability['tanggal_panen'] ?></td>
                        </tr>

                        <tr>
                            <th>Kualitas Beras</th>
                            <td><?= $traceability['kualitas_beras'] ?></td>
                        </tr>

                        <tr>
                            <th>Tujuan Distribusi</th>
                            <td><?= $traceability['tujuan_distribusi'] ?></td>
                        </tr>

                        <tr>
                            <th>Status Distribusi</th>
                            <td>
                                <span class="badge bg-success">

                                    <?= $traceability['status_distribusi'] ?>

                                </span>
                            </td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>