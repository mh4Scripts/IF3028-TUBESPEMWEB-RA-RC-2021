<?php

class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}

	public function index(){
		$data['dashboard'] = $this->tampil_laporan->tampil_data()->result();

		$this->load->view('dashboard', $data);

	}

	public function tambah(){
		$this->load->view('buat_laporan');		
	}

	public function tambah_aksi(){
		$isi 	= $this->input->post('isi');
		$aspek 	= $this->input->post('aspek');
 
		$data = array(
			'isi' 	=> $isi,
			'aspek' => $aspek,
			);

		$this->tampil_laporan->input_data($data,'tb_laporan');
		redirect('dashboard/index');
	}
}
?>
