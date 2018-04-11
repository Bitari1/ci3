<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id='.$id);
		return $query->result();
	}

	//model upload gambar

	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	//insert data

	public function insert($upload)
	{
		$data = array(
			'id' => '',
			'judul' => $this->input->post('input_judul'),
			'konten' => $this->input->post('input_content'),
			'tanggal' => $this->input->post('input_tanggal'),
			'gambar' => $upload['file']['file_name']
		);

		$this->db->insert('blog', $data);
	}


	public function update($post, $id){
		$judul = $this->db->escape($post['judul']);
		$konten = $this->db->escape($post['konten']);
		$tanggal = $this->db->escape($post['tanggal']);

		$sql = $this->db->query('UPDATE blog SET judul = $judul, konten = $konten, tanggal = $tanggal WHERE id = '.intval($id));

		return TRUE;
	}


	public function delete($id){
		$query = $this->db->query('DELETE from blog WHERE id= '.$id);
	}
}