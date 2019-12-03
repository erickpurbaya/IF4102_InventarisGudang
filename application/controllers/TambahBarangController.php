<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahBarangController extends CI_Controller {

	public function index()
	{   
        $this->load->model('ModelBarang');
		$data['judul'] = "Tambah Barang";

		$this->load->view('tambahBarangGudang', $data);
	}
	
	public function tambahBarang(){
		$namabarang = $this->input->post('namaBarBar');
        $stok = $this->input->post('stokBarBar');
		$deskripsi = $this->input->post('deskripsiBar');

		$kode = $this->ModelBarang->ambilData();
		foreach ($kode as $ko) :
			$username = $this->ModelAkunGudang->cekDataKode();
			foreach ($username as $user) :
				$kodeakun = $user['kodegudang'];
				$data['usernameke'] = $user['username'];
				$data['nameke'] = $user['namagudang'] ;
			endforeach;
		endforeach;

		$kodee = $this->ModelAkunGudang->ambilData($kodeakun);
		foreach ($kodee as $kode) :
        	$data2 = [ 
            	'namabarangg' => $namabarang,
            	'stokbarangg' => $stok,
				'deskripsibarangg' => $deskripsi,
				'kodegudangg' => $kode['kodegudang'],
        	];

		endforeach;
        $this->ModelBarang->masukkanDataBarBar($data2, 'tb_baranggudang');
        redirect('LoginController/index');
	}
}
