<?php

namespace App\Models;

use CodeIgniter\Model;

class GolonganModel extends Model
{
    protected $table      = 'golongan';
    protected $primaryKey = 'id_g';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_g', 'nama'];

    protected $useTimestamps = false;

    protected $validationRules    = [
        'nama' => 'required'
	];
	
    protected $validationMessages = [
        'nama'        => [
            'required' => 'maaf nama harus diisi',
        ],
	];
	
    protected $skipValidation     = false;
	
	function newId(){
		$query = $this->db->query("select id_g from golongan order by id_g desc limit 1");
		$rows = $query->getResult();
		if(isset($rows[0]->id_g)){
			return $rows[0]->id_g + 1;
		}else{
			return 1;
		}
	}
}

?>