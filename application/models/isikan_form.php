<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class isikan_form extends CI_Model {
	public function InsertLapor($data)
	{
		$this->db->insert('isian_lapor', $data);
	}
}
