<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_u';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_u', 'nama', 'notas','id_g','no_hp','username','password','level'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'nama' => 'required',
	];
	
    protected $validationMessages = [
        'nama'        => [
            'required' => 'Maaf nama harus diisi',
        ],
	];
	
    protected $skipValidation     = false;
	
	function newId(){
		$query = $this->db->query("select id_u from user order by id_u desc limit 1");
		$rows = $query->getResult();
		if(isset($rows[0]->id_u)){
			return $rows[0]->id_u + 1;
		}else{
			return 1;
		}
	}

    function getRole(string $username, string $password){
        $q = $this->db->Query("SELECT level FROM `user`
        WHERE username='$username' AND `password`='$password'");

        $r = '';
        foreach ($q->getResult() as $row) {
            $r = $row->level;
        }

        return $r;
    }
}

?>