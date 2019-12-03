<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginControllerGudang extends CI_Controller {

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
		$data['judul'] = "Login Gudang";
		$this->load->view('loginGudang', $data);
	}

	public function cekAkun(){
		$this->db->from('aktifakun');
		$this->db->truncate();
		$keyword1 = $this->input->post('usernamee');
		$keyword2 = $this->input->post('passwordd');
		$kebenaran = $this->ModelAkunGudang->cekData($keyword1, 'tb_akungudang');
		if (!empty($kebenaran)){
			foreach ($kebenaran as $keb) :
				$akunnum['kodeakun'] = $keb['kodegudang'];

				$this->ModelAkunGudang->activeA($akunnum, "aktifakun");
			endforeach;
			redirect('LoginController/index');
		} else {
			echo "<script type='text/javascript'>alert('Username/Password tidak benar!');</script>";
			redirect('LoginControllerGudang/index');
		}
	}
}
