<?php

class Lapor_model extends CI_model
{
	public function getlapor(){
		return $this->db->get('lapor')->result_array(); //ambil seluruh data dari tabel lapor
	}

}