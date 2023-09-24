<?php

namespace App\Controller\Api;

use App\Models\MakanModel;
use App\Models\MinumModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class bahan extends ResourceController
{
    use ResponseTrait;

    public function show($id = null)
    {
        $model = new MakanModel();
        $data = $model->find($id);

        return $this->respond($data);
    }
}

?>