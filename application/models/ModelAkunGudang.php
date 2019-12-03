<?php

class ModelAkunGudang extends CI_Model {
    public function ambilData($kode){
        $this->db->where('kodegudang' ,$kode );
        return $this->db->get('tb_akungudang')->result_array();
    }

    public function masukkanData($data){
        $this->db->insert('tb_akungudang', $data);
    }

    public function cekData($keyword1){
        $this->db->from('tb_akungudang');
        $this->db->where('username', $keyword1);
        return $this->db->get()->result_array();
    }
    
    public function cekDataKode(){
        $this->db->from('aktifakun');
        $a = $this->db->get()->result_array();
        foreach ($a as $b) :
            $kode = $b['kodeakun'];
        endforeach;
        $this->db->from('tb_akungudang');
        $this->db->where('kodegudang', $kode);
        return $this->db->get()->result_array();
    }

    public function updateCus($data, $kodegudang){
        $this->db->from('tb_akungudang');
        $this->db->where('kodegudang', $kodegudang);
        $this->db->update('tb_akungudang', $data);
    }

    public function cekDup($user){
        $this->db->from('tb_akungudang');
        $this->db->where('username', $user);
        $kebenaran = $this->db->get()->result_array();
        if(!empty($kebenaran)){
            return false;
        } else {
            return true;
        }
    }

    public function activeA($kode){
        $this->db->insert('aktifakun', $kode);
    }
}
