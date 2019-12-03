<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HapusBarangController extends CI_Controller {

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
        $this->load->model('ModelBarang');
		$data['barang'] = $this->ModelBarang->ambilData();

		$this->load->view('hapusBarangGudang', $data);
    }
	

    public function search() {
        $this->load->model('ModelBarang');
        $keyword = $this->input->post('cariBarang');
        $data['barang2'] = $this->ModelBarang->keywordSearch($keyword, 'tb_baranggudang');
        $this->load->view('hapusBarangGudang2', $data);
	}
	

    public function hapus($kodebarang){
        $kode = array ('kodebarangg' => $kodebarang);
        $this->ModelBarang->hapusData($kode, 'tb_baranggudang');
    }
}
