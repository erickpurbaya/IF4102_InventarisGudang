<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarTokoController extends CI_Controller {

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
        $data['judul'] = "Daftar Toko";
		$this->load->view('daftarToko', $data);
    }
    
    public function tambahDataAkunToko() {
        $namatoko = $this->input->post('namaTok');
        $namapemilik = $this->input->post('namaLeng');
        $emailtoko = $this->input->post('emailTok');
        $usernametoko = $this->input->post('username');
        $passwordtoko = $this->input->post('password');
        $alamattoko = $this->input->post('alamat');

        $data = [ 
            'namatoko' => $namatoko,
            'namalengkap' => $namapemilik,
            'email' => $emailtoko,
            'username' => $usernametoko,
            'password' => $passwordtoko,
            'alamat' => $alamattoko,
        ];

        $this->ModelAkunToko->masukkanData($data, 'tb_akuntoko');
        redirect('LoginController/index');
    }
}
