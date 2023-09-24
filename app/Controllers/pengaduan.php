<?php

namespace App\Controllers;

class Pengaduan extends BaseController
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
		$data['pengaduan'] = $this->pengaduanModel->findAll();
        return view('pengaduan/tampilPengaduan',$data);
    }

	public function admin()
    {
        return view('admin');
    }
	
	public function sidebar()
	{
		$data['pengaduan'] = $this->pengaduanModel->findAll();
		return view('pengaduan/tampilPengaduan',$data);
	 }

	public function inputData(){
       return view('pengaduan/formInputPengaduan');
	}
	
	public function simpanData(){
		$status = "terkirim";
		$newId = $this->pengaduanModel->newId();
		$data = [
			'id' => $newId,
			'id_j' => $_POST['id_j'],
			'pengaduan' => $_POST['pengaduan'],
			'notas' => $_POST['notas'],
			'status' => $status,
		];

		if($this->pengaduanModel->insert($data)==false){
			unset($data);
			$data['errors'] = $this->pengaduanModel->errors();
			$data['pengaduan'] = $this->pengaduanModel->findAll();
			return view('home',$data);
		}else{
			$data['pengaduan'] = $this->pengaduanModel->get_where();
			$data['jenis_p'] = $this->jenisModel->findAll();
        	$data['golongan'] = $this->golonganModel->findAll();
			echo "<script>
			alert('Silahkan menunggu beberapa saat lagi customer service akan memberikan solusi anda :)
			atau jika mungkin customer service akan menghubungi nomor anda untuk menyelesaikan solusinya trimakasih...');
			</script>";
			return view('adu',$data);
		}
	}
	
	public function ubahData($key){
		$data=$this->pengaduanModel->find($key);
        return view('pengaduan/formEditpengaduan',$data);
	}
	
	
	public function simpanUbahData($id){
		$data = [
			'status' => $_POST['status'],
			'balasan' => $_POST['balasan']
		];
			
		$this->pengaduanModel->update($id,$data);
		
		$data['pengaduan'] = $this->pengaduanModel->findAll();
		return view('pengaduan/tampilPengaduan',$data);
		
	}
	
	public function hapusData($key){
		try{
			$this->pengaduanModel->delete($key);
		}finally{
		$data['pengaduan'] = $this->pengaduanModel->findAll();
        return view('pengaduan/tampilPengaduan',$data);
		}
	}

}
