<?php

class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}
	
	public function index(){
		$data['hal_utama'] = $this->tampil_laporan->tampil_data()->result();

		$this->load->view('dashboard', $data);

	}

	public function tambah(){
		$this->load->view('buat_laporan');		
	}

	public function readmore($id){
		$data['info_detail'] = $this->tampil_laporan->tampil_artikel($id);
		$this->load->view('detail_laporan', $data);
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

	public function hapus($id){
		$where = array('id'=> $id);
		$this->tampil_laporan->hapus_laporan($where, 'tb_laporan');
		redirect('dashboard/index');
	}
}
?>
