<?php
error_reporting(0);

class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Lapor_model'); //ngambil model model_lapor dari folder models
		$this->load->library('form_validation');
	}
	
	public function index(){
		$data['lapor'] = $this->Lapor_model->getlapor(); //getlapor() ada di model Model_lapor
		$this->load->view('home/index',$data);
	}

	public function tambah(){
		
		//validasi form
		$this->form_validation->set_rules('isi', 'Isi', 'required|min_length[250]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('tambah/index');
		}else{
			$this->Lapor_model->tambah();
			echo "
				<script>
					alert('berhasil menambah data');
					document.location.href='../';
				</script>
				";
		}
		
	}
}
