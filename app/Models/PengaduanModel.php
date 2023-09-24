<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model


{

    protected $table      = 'pengaduan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id','id_j', 'pengaduan','notas','status','balasan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [
        'pengaduan' => 'required'
	];
	
    protected $validationMessages = [
        'pengaduan'        => [
            'required' => 'maaf pengaduan harus diisi',
        ],
	];
	
    protected $skipValidation     = false;
	
	function newId(){
		$query = $this->db->query("select id from pengaduan order by id desc limit 1");
		$rows = $query->getResult();
		if(isset($rows[0]->id)){
			return $rows[0]->id + 1;
		}else{
			return 1;
		}
	}

    function get_where(){
        $builder = $this->db->table('pengaduan');
        $query = $builder->getWhere(['status'=>'sudah dibalas']);
        return $query->getResult();
    }

    // protected $db;
    // public function __construct(){
    //     $this->db = db_connect();
    // }

    // public function get_where()
    // {
    //     $builder = $this->db->table('pengaduan');
    //     $query = $builder->getWhere(['status'=>'sudah dibalas']);
    //     return $query;
    // } 
}

?>