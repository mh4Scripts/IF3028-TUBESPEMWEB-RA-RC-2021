<?php

class Tampil_laporan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_laporan');
	}

	public function input_data($data){
		return $this->db->insert('tb_laporan', $data);
	}

	public function tampil_artikel($id){
		$this->db->where('id', $id);
		$query = $this->db->get('tb_laporan');
		return $query->result();
	}

	public function hapus_laporan($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	} 

}
?>
