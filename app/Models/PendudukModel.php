<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table      = 'penduduk';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'first_name',
        'last_name',
        'gender',
        'photo_profile'
    ];

    public function search($keyword)
    {
        return $this->table($this->table)->like('CONCAT(first_name,last_name)', str_replace(' ', '', $keyword));
    }
}
