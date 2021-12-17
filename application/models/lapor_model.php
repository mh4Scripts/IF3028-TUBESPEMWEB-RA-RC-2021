<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class lapor_model extends CI_Model{
    
    public function getlapor(){
        return $this->db->get('laporan')->result_array(); 
    }

    public function tambah(){

        date_default_timezone_set('Asia/Jakarta');
		$waktu = date("Y-m-d H:i:s");

        $lampiran = $_FILES['file'];
		if($lampiran = ''){}else{
			$config['upload_path'] = './assets/img';
			$config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				echo "gagal";
			}else{
				$file = $this->upload->data('file_name');
			}
		}

        $data = [
			"isi" => $this->input->post('isi'),
			"aspek" => $this->input->post('aspek'),
			"waktu" => $waktu,
			"lampiran" => $file
        ];

        if($file == "" && $aspek==""){
			return false;
		}else{
            $this->db->insert('lapor', $data);
            return true;
		}
    }

    public function cari($cari){
        $this->db->like('isi', $cari);
        $this->db->or_like('waktu', $cari);
        $this->db->or_like('aspek', $cari);

        return $this->db->get('laporan')->result_array();
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('laporan');
    }

    public function detail($id){
        return $this->db->get_where('laporan', array('id'=>$id))->row_array();
    }	

    public function ubah($id){

		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("Y-m-d H:i:s");

		$file = $_FILES['file'];
		if($file = ''){}else{
			$config['upload_path'] = './asset/file';
			$config['allowed_types'] = 'jpeg|jpg|png|gif|pdf';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				echo "gagal";		
			}else{
				$file = $this->upload->data('file_name');
			}
		}

		$isi = $this->input->post('isi');
		$aspek = $this->input->post('aspek');

		if($file == ""){
			return false;
		}else{
            $this->db->set('isi', $isi);
            $this->db->set('aspek', $aspek);
            $this->db->set('waktu', $waktu);
            $this->db->set('file', $file);
            $this->db->where('id', $id);
            $this->db->update('laporan');
            return true;
		}
	}

}

