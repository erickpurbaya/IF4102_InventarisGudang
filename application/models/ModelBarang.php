<?php

class ModelBarang extends CI_Model {
    public function ambilData(){
        return $this->db->get('tb_baranggudang')->result_array();
    }

    public function ambilDataSpec(){
        $this->db->from('aktifakun');
        $a = $this->db->get()->result_array();
        foreach ($a as $b) :
            $kode = $b['kodeakun'];
        endforeach;
        $this->db->from('tb_baranggudang');
        $this->db->where('kodegudangg', $kode);
        return $this->db->get()->result_array();
    }

    public function keywordSearch($keyword) {
        $this->db->select('*');
        $this->db->from('tb_akungudang');
        $this->db->like('namabarangg', $keyword);
        return $this->db->get()->result_array();
    }

    public function hapusData($kode , $table){
        $this->db->where($kode);
        $this->db->delete($table); 
    }

    public function masukkanDataBarBar($data){
        $this->db->insert('tb_baranggudang', $data);
    }
}
