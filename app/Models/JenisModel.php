<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $table      = 'jenis_p';
    protected $primaryKey = 'id_j';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_j', 'nama_j'];

    protected $useTimestamps = false;

    protected $validationRules    = [
        'nama_j' => 'required'
	];
	
    protected $validationMessages = [
        'nama_j'        => [
            'required' => 'maaf nama harus diisi',
        ],
	];
	
    protected $skipValidation     = false;
	
	function newId(){
		$query = $this->db->query("select id_j from jenis_p order by id_j desc limit 1");
		$rows = $query->getResult();
		if(isset($rows[0]->id_j)){
			return $rows[0]->id_j + 1;
		}else{
			return 1;
		}
	}
}

?>