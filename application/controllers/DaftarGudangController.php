<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarGudangController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['judul'] = "Daftar Gudang";
		$this->load->view('daftar', $data);
    }

    public function tambahDataAkunGudang() {
        $namagudang = $this->input->post('namaGud');
        $namapemilik = $this->input->post('namaLeng');
        $emailgudang = $this->input->post('Email');
        $jenisgudang = $this->input->post('jenisGud');
        $usernamegudang = $this->input->post('username');
        $passwordgudang = $this->input->post('password');
        $cpasswordgudang = $this->input->post('conPass');
        $alamatgudang = $this->input->post('alamat');
    
        $cek = $this->ModelAkunGudang->cekDup($usernamegudang);
        if($cek){
            if($passwordgudang === $cpasswordgudang){
                $data = [ 
                    'namagudang' => $namagudang,
                    'namapemilik' => $namapemilik,
                    'email' => $emailgudang,
                    'jenisgudang' => $jenisgudang,
                    'username' => $usernamegudang,
                    'password' => $passwordgudang,
                    'alamat' => $alamatgudang,
                ];
                $this->ModelAkunGudang->masukkanData($data, 'tb_akungudang');
                redirect('LoginControllerGudang/index');
            } else {
                echo "<script type='text/javascript'>alert('Password tidak sesuai');</script>";
                redirect('DaftarGudangController/index');
            }
        } else {
            echo "<script type='text/javascript'>alert('Username telah ada!');</script>";
            redirect('DaftarGudangController/index');
        }
    }
}
