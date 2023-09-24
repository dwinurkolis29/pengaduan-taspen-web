<?php

namespace App\Controllers;

class Golongan extends BaseController
{
	public \App\Models\GolonganModel $golonganModel;
	
	public function __construct(){
		$this->golonganModel = new \App\Models\GolonganModel();
	}
	
    public function index()
    {
		$data['golongan'] = $this->golonganModel->findAll();
        return view('golongan/tampilGolongan',$data);
    }

	public function customer()
    {
        return view('customer');
    }
	
	public function sidebar()
	{
		$data['golongan'] = $this->golonganModel->findAll();
		return view('golongan/tampilGolongan',$data);
	 }

	public function inputData(){
       return view('golongan/formInputGolongan');
	}
	
	
	public function simpanData(){
		$newId = $this->golonganModel->newId();
		$data = [
			'id_g' => $newId,
			'nama' => $_POST['nama'],
		];

		if($this->golonganModel->insert($data)==false){
			unset($data);
			$data['errors'] = $this->golonganModel->errors();
			$data['golongan'] = $this->golonganModel->findAll();
			return view('golongan/tampilGolongan',$data);
		}else{
			$data['golongan'] = $this->golonganModel->findAll();
			return view('golongan/tampilGolongan',$data);
		}
	}
	
	public function ubahData($key){
		$data=$this->golonganModel->find($key);
        return view('golongan/formEditGolongan',$data);
	}
	
	
	public function simpanUbahData($id){
		$data = [
			'nama' => $_POST['nama']
		];
			
		$this->golonganModel->update($id,$data);
		
		$data['golongan'] = $this->golonganModel->findAll();
		return view('golongan/tampilGolongan',$data);
		
	}
	
	public function hapusData($key){
		try{
			$this->golonganModel->delete($key);
		}finally{
		$data['golongan'] = $this->golonganModel->findAll();
        return view('golongan/tampilGolongan',$data);
		}
	}
}
