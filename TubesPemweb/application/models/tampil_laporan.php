<?php

class Tampil_laporan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_laporan');
	}

	public function input_data($data){
		return $this->db->insert('tb_laporan', $data);
	}
}
?>