<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggilinganModel extends Model
{
    protected $table = 'penggilingan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'panen_id',
        'tanggal_giling',
        'kualitas_beras',
        'catatan'
    ];
}
