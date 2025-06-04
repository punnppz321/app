<?php

namespace App\Models;

use CodeIgniter\Model;
use \Hermawan\DataTables\DataTable;

class KeyzModel extends Model
{
    protected $table      = 'keyz_code';
    protected $primaryKey = 'id_keyz';
    protected $allowedFields = ['game', 'user_key', 'duration', 'expired_date', 'max_devices', 'devices', 'status', 'registrator','key_reset_time','key_reset_token'];

    protected $useTimestamps = true;
    
    
     public function insert_key($game, $user_key, $duration, $max_devices, $devices, $registrator, $created_at, $updated_at, $key_reset_time, $key_reset_token)
    {
        $data = [
            'game' => $game,
            'user_key' => $user_key,
            'duration' => $duration,
            'max_devices' => $max_devices,
            'devices' => $devices,
            'status' => '1',
            'registrator' => $registrator,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
            'key_reset_time' => $key_reset_time,
            'key_reset_token' => $key_reset_token
        ];

        $this->insert($data);
        return $this->insertID();
    }


    public function getKeyz($key = false, $where = 'user_key')
    {
        return $this->where($where, $key)
            ->get()
            ->getRowObject();
    }

    public function getKeysGame($where)
    {
        return $this->where($where)
            ->get()
            ->getRowObject();
    }

     public function API_getKeyz()
{
    $connect = db_connect();
    $builder = $connect->table($this->table);

    $userModel = new UserModel();
    $user = $userModel->getUser();
    if ($user->level != 1) {
        $builder->where('registrator', $user->username);
    }

    $builder->select('CONCAT(keyz_code.id_keyz) as id, game, user_key, duration, CONCAT(keyz_code.expired_date) as expired, max_devices, devices, status, registrator');

    return DataTable::of($builder)
        ->setSearchableColumns(['id_keyz', 'game', 'user_key', 'duration', 'expired_date', 'max_devices', 'devices', 'registrator','key_reset_time','key_reset_token'])
        ->format('status', function ($value) {
            return ($value ? "Active" : "Inactive");
        })
        ->format('duration', function ($value) {
            return ($value /24)." Hours"; // Convert duration from days to hours
        })
        ->format('devices', function ($value) {
            if ($value) {
                $e = explode(',', reduce_multiples($value, ",", true));
            }
            return $value ? count($e) : 0;
        })
        ->format('expired', function ($value) {
            $time = new \CodeIgniter\I18n\Time;
            return $value ? $time::parse($value)->toLocalizedString('d MMM yy - H:m') : '';
        })
        ->toJson(true);
}

    
}



