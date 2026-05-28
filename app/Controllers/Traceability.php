<?php

namespace App\Controllers;

class Traceability extends BaseController
{
    public function index()
    {

    }

    public function detail($kode_batch)
    {
        $db = \Config\Database::connect();

        $builder = $db->table('distribusi');

        $builder->select('
            panen.kode_batch,
            panen.lokasi_sawah,
            panen.jenis_padi,
            panen.tanggal_panen,

            penggilingan.kualitas_beras,

            distribusi.tujuan_distribusi,
            distribusi.status_distribusi
        ');

        $builder->join(
            'penggilingan',
            'penggilingan.id = distribusi.penggilingan_id'
        );

        $builder->join(
            'panen',
            'panen.id = penggilingan.panen_id'
        );

        $builder->where(
            'panen.kode_batch',
            $kode_batch
        );

        $query = $builder->get();

        $data = [
            'title' => 'Detail Traceability',
            'traceability' => $query->getRowArray()
        ];

        return view('traceability/v_detail', $data);
    }

    public function qr($kode_batch)
    {
        $data = base_url(
            'traceability/detail/' . $kode_batch
        );

        $qrCode = new \Endroid\QrCode\QrCode($data);

        $writer = new \Endroid\QrCode\Writer\PngWriter();

        $result = $writer->write($qrCode);

        return $this->response
            ->setHeader('Content-Type', 'image/png')
            ->setBody($result->getString());
    }
}