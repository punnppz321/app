<?php

namespace App\Models;

use CodeIgniter\Model;

class Bt extends Model
{
    /*=================================================================*/
    
    protected $table      = 'btonoff';
    protected $allowedFields = ['status','update'];
    
}