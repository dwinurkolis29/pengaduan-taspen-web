<?php

namespace App\Controllers;

class User extends BaseController
{
    public \App\Models\UserModel $userModel;
    public \App\Models\GolonganModel $golonganModel;
    public \App\Models\JenisModel $jenisModel;

    public function __construct(){
        $this->userModel=new \App\Models\UserModel();
        $this->golonganModel = new \App\Models\GolonganModel();
        $this->jenisModel = new \App\Models\JenisModel();
    }

    public function index()
    {
        return view('login');
    }

    public function sidebar()
	{
		$data['user'] = $this->userModel->findAll();
		return view('user/tampilUser',$data);
	 }

    public function register()
    {
        $data['user'] = $this->userModel->findAll();
        $data['golongan'] = $this->golonganModel->findAll();
        return view('register',$data);
    }


     public function inputData(){
        $data['user'] = $this->userModel->findAll();
        return view('formInputUser',$data);
     }
     
     
     public function simpanData(){
         $level = "nasabah";
         $newId = $this->userModel->newId();
         $data = [
            'id_u' => $newId,
             'nama' => $_POST['nama'],
             'notas' => $_POST['notas'],
             'id_g' => $_POST['id_g'],
             'no_hp' => $_POST['no_hp'],
             'username' => $_POST['username'],
             'password' => $_POST['password'],
             'level' => $level
         ];
 
         if($this->userModel->insert($data)==false){
             unset($data);
             $data['errors'] = $this->userModel->errors();
             $data['user'] = $this->userModel->findAll();
             echo "<script>
			alert('Register gagal!');
			</script>";
             return view('register',$data);
         }else{
            echo "<script>
			alert('Register telah berhasil!');
			</script>";
             $data['user'] = $this->userModel->findAll();
             return view('login',$data);
         }
     }
     
     public function hapusData($key){
         try{
             $this->userModel->delete($key);
         }finally{
         $data['user'] = $this->userModel->findAll();
         return view('tampilUser',$data);
         }
     }

    function auth(){
        $u = $_POST['username'];
        $p = $_POST['password'];

        $r = $this -> userModel -> getRole($u,$p);

        if($r=="customer"){
            return view('customer');
        }else if($r=="nasabah"){
            echo "<script>
			alert('Login telah berhasil silahkan mengajukan pengaduan');
			</script>";
            $data['jenis_p'] = $this->jenisModel->findAll();
            return view('pengaduan/formInputPengaduanN',$data);
        }else {
            echo "<script>
			alert('username atau password yang anda masukan salah coba lagi!')
			</script>";
            return view('login');
        }
    }
}
?>