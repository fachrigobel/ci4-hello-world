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
        'photo_profile'
    ];

    public function search($keyword)
    {
        return $this->table($this->table)->like('first_name', $keyword)->orLike('last_name', $keyword);
    }
}
