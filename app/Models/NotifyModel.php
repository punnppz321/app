<?php

namespace App\Models;

use CodeIgniter\Model;


class NotifyModel extends Model
{
    protected $table = 'notification';
    protected $allowedFields = ['id','notification'];

    public function insertText($data)
    {
        $this->db->table($this->table)
                 ->insert($data);
    }
}