<?php 

namespace App\Models;

use CodeIgniter\Model;

class LogsModel extends Model
{
	protected $table      = 'logs';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'username','date', 'time', 'reference', 'name', 'ip', 'location', 'browser','device_name', 'status'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	// we need different rules for logs
	protected $dynamicRules = [
		'logs' => [
		    'username'	=> 'required',
			'date'	=> 'required',
			'time'	=> 'required',
			'reference'	=> 'required',
			'ip'	=> 'required',
			'location'	=> 'required',
			'browser'	=> 'required',
			'device_name'	=> 'required',
			'status'	=> 'required'
		]
	];

	protected $validationMessages = [];

	protected $skipValidation = false;


    //--------------------------------------------------------------------

    /**
     * Retrieves validation rule
     */
	public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}

}
