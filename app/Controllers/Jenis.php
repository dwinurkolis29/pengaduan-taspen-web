<?php

namespace App\Controllers;

class Jenis extends BaseController
{
	public \App\Models\JenisModel $jenisModel;
	
	public function __construct(){
		$this->jenisModel = new \App\Models\JenisModel();
	}
	
    public function index()
    {
		$data['jenis_p'] = $this->jenisModel->findAll();
        return view('jenis/tampilJenis',$data);
    }

	public function admin()
    {
        return view('admin');
    }
	
	public function sidebar()
	{
		$data['jenis_p'] = $this->jenisModel->findAll();
		return view('jenis/tampilJenis',$data);
	 }

	public function inputData(){
       return view('jenis/formInputJenis');
	}
	
	
	public function simpanData(){
		$newId = $this->jenisModel->newId();
		$data = [
			'id_j' => $newId,
			'nama_j' => $_POST['nama_j'],
		];

		if($this->jenisModel->insert($data)==false){
			unset($data);
			$data['errors'] = $this->jenisModel->errors();
			$data['jenis_p'] = $this->jenisModel->findAll();
			return view('jenis/tampilJenis',$data);
		}else{
			$data['jenis_p'] = $this->jenisModel->findAll();
			return view('jenis/tampilJenis',$data);
		}
	}
	
	public function ubahData($key){
		$data=$this->jenisModel->find($key);
        return view('jenis/formEditJenis',$data);
	}
	
	
	public function simpanUbahData($id){
		$data = [
			'nama_j' => $_POST['nama_j']
		];
			
		$this->jenisModel->update($id,$data);
		
		$data['jenis_p'] = $this->jenisModel->findAll();
		return view('jenis/tampilJenis',$data);
		
	}
	
	public function hapusData($key){
		try{
			$this->jenisModel->delete($key);
		}finally{
		$data['jenis_p'] = $this->jenisModel->findAll();
        return view('jenis/tampilJenis',$data);
		}
	}
}
