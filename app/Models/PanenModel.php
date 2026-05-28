<?php

namespace App\Models;

use CodeIgniter\Model;

class PanenModel extends Model
{
    protected $table = 'panen';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'kode_batch',
        'lokasi_sawah',
        'jenis_padi',
        'tanggal_panen',
        'jumlah_panen'
    ];
}
