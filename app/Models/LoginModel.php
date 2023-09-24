<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table      = 'login';
    protected $primaryKey = 'username';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username','password','level'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

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