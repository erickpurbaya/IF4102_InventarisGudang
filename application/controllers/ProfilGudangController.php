<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilGudangController extends CI_Controller {

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
		$data['profil'] = $this->ModelAkunGudang->ambilData('3');
		$data['judul'] = "Pengaturan Profil";
		$this->load->view('profilGudang', $data);
	}
	public function update() {
		$namalengkap = $this->input->post('namaLeng');
        $namagudang = $this->input->post('namaGud');
		$jenisgudang = $this->input->post('jeniGud');
		$emailgudang = $this->input->post('Email');
		$nomortelepon = $this->input->post('noTelp');
		$alamatgudang = $this->input->post('alamat');

        $data = [ 
            'namapemilik' => $namalengkap,
			'namagudang' => $namagudang,
			'jenisgudang' => $jenisgudang,
			'email' => $emailgudang,
			'notelp' => $nomortelepon,
			'alamat' => $alamatgudang,
		];

		$this->ModelAkunGudang->updateCus($data, 2);
    }
}
