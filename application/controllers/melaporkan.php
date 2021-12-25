<?php
/**defined('BASEPATH') OR exit('No direct script access allowed');
*/
class melaporkan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('isikan_form');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->view('laporkan');
	}

	public function submit()
	{
		$Judul=$this->input->post('judul');
		$isi=$this->input->post('Laporan');
		$aspek=$this->input->post('aspek');
		$gambar=$this->input->post('foto');

		$DataInsert = array(
			'Judul' => $Judul,
			'isi' => $isi,
			'aspek' => $aspek,
			'gambar' => $gambar,
		);
		$this->isikan_form->InsertLapor($DataInsert);
		redirect(base_url('homepage'));
	}
	
}
