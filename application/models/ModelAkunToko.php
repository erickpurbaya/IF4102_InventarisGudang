<?php

class ModelAkunToko extends CI_Model {
    public function masukkanData($data){
        $this->db->insert('tb_akuntoko', $data);
    }
}
