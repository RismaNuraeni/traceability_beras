<?php 

namespace App\Models;

use CodeIgniter\Model;

class DistribusiModel extends Model
{
    protected $table = 'distribusi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'penggilingan_id',
        'tujuan_distribusi',
        'tanggal_distribusi',
        'status_distribusi'
    ];
}
