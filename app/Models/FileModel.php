<?php

namespace App\Models;

use CodeIgniter\Model;


class FileModel extends Model
{
    protected $table = 'files';
    protected $allowedFields = ['id','name','type','size','extension','version'];

    public function getData()
    {
        return $this->db->table($this->table)->get()->getResultArray();
    }
}