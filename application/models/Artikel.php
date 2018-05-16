<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	


	public function get_all_artikel( $limit = FALSE, $offset = FALSE )
 	{
 	// Jika variable $limit ada pada parameter maka kita limit query-nya
 		if ( $limit ) { 
 			$this->db->limit($limit, $offset);
 		}
 			// Urutkan berdasar tanggal
 		$this->db->order_by('blog.tanggal', 'DESC');
 		// Inner Join dengan table Categories
	 	$query = $this->db->get('blog');	
 		// Return dalam bentuk object
 		return $query->result();
 	}


		public function get_total()
 	{
 		// Dapatkan jumlah total artikel
 		return $this->db->count_all("blog");
 	}


	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id='.$id);
		return $query->result();

		$this->db->select("*");
		$this->db->from('blog');
		$this->db->join('categories','blog.id = categories.id_cat');
		$this->db->where('blog.id ='.$id);
		return $this->db->get()->result();
	}

	//model upload gambar
 
	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '1000000000';
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
			'konten' => $this->input->post('input_konten'),
			'tanggal' => $this->input->post('input_tanggal'),
			'gambar' => $upload['file']['file_name'],
			'kategori' => $this->input->post('kategori'),
			'penulis' => $this->input->post('input_penulis'),
			'sumber' => $this->input->post('input_sumber'),			
		);

		$this->db->insert('blog', $data);
	}


	public function edit($post, $id){
		$judul = $this->db->escape($post['judul']);
		$konten = $this->db->escape($post['konten']);
		$tanggal = $this->db->escape($post['tanggal']);
		$kategori = $this->db->escape($post['kategori']);
		$penulis = $this->db->escape($post['penulis']);
		$sumber = $this->db->escape($post['sumber']);

		$sql = $this->db->query('UPDATE blog SET judul = $judul, konten = $konten, tanggal = $tanggal, kategori = $kategori, penulis = $penulis, sumber = $sumber WHERE id = '.intval($id));

		return TRUE;
	}


	public function delete($id){
		$query = $this->db->query('DELETE from blog WHERE id= '.$id);
	}

 
}