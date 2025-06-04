<?php

namespace App\Models;

use CodeIgniter\Model;


class MemoryModel extends Model
{
    protected $table = 'memory';
    protected $allowedFields = ['id','status','message'];

    public function insertText($data)
    {
        $this->db->table($this->table)
                 ->insert($data);
    }
}