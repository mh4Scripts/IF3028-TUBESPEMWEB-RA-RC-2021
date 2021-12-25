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
		$file 	= $_FILES['file'];

		if ($file =''){}else{
			$config['upload_path']		= './uploads/';
			$config['allowed_types']	='jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf|';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('file')){
				echo "Upload Gagal";die();
			}else{
				$file = $this->upload->data('file_name');
			}

		}
 
		$data = array(
			'isi' 	=> $isi,
			'aspek' => $aspek,
			'file' 	=> $file
			);

		$this->tampil_laporan->input_data($data,'tb_laporan');
		redirect('dashboard/index');
	}

	public function hapus($id){
		$where = array('id'=> $id);
		$this->tampil_laporan->hapus_laporan($where, 'tb_laporan');
		redirect('dashboard/index');
	}


	public function search(){
		$keyword = $this->input->post('keyword');
		$data['hal_utama'] = $this->tampil_laporan->get_keyword($keyword);

		$this->load->view('dashboard', $data);
	}
}
?>
