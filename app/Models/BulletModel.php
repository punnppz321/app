<?php

namespace App\Models;

use CodeIgniter\Model;


class BulletModel extends Model
{
    protected $table = 'bullet';
    protected $allowedFields = ['id','status','message'];

    public function insertText($data)
    {
        $this->db->table($this->table)
                 ->insert($data);
    }
}