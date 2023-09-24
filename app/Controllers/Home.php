<?php

namespace App\Controllers;

class Home extends BaseController
{
    public \App\Models\PengaduanModel $pengaduanModel;
    public \App\Models\JenisModel $jenisModel;
    public \App\Models\GolonganModel $golonganModel;

	
	public function __construct(){

		$this->pengaduanModel = new \App\Models\PengaduanModel();
        $this->jenisModel = new \App\Models\JenisModel();
        $this->golonganModel = new \App\Models\GolonganModel();
	}

    public function index()
    {   
        $data['pengaduan'] = $this->pengaduanModel->get_where();
        // $data['pengaduan'] = $this->pengaduanModel->findAll();
        $data['jenis_p'] = $this->jenisModel->findAll();
        $data['golongan'] = $this->golonganModel->findAll();
        
        return view('home',$data);
    }

}
