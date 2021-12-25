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

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tb_laporan');
		$this->db->like('isi', $keyword);
		$this->db->or_like('aspek', $keyword);

		return $this->db->get()->result();

	}
}

?>
