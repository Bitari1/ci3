<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('Artikel');
		$data['artikel'] = $this->Artikel->get_artikels();

		// Dapatkan data dari model Blog dengan pagination
 		// Jumlah artikel per halaman
 		$limit_per_page = 4;
 		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		 $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

 		// Dapatkan jumlah data
		 $total_records = $this->Artikel->get_total();
		 if ($total_records > 0) {
 			// Dapatkan data pada halaman yg dituju
 			$data["Artikel"] = $this->Artikel->get_all_artikel($limit_per_page,
			$start_index);

		 // Konfigurasi pagination
 		$config['base_url'] = base_url() . 'blog/index';
 		$config['total_rows'] = $total_records;
 		$config['per_page'] = $limit_per_page;
 		$config["uri_segment"] = 3;

		 $this->pagination->initialize($config);

		 // Buat link pagination
 		$data["links"] = $this->pagination->create_links();
		}

		$this->load->view('home_view', $data);


	}

	public function detail($id)
	{
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('home_detail', $data);
	}

	public function tambah()
	{
		$this->load->model('artikel');
		$this->load->model('category_model');
		$this->load->helper('form');
		// $data = array();
		$data['categories'] = $this->category_model->get_categories();
		


		$this->load->library('form_validation');
		$this->form_validation->set_rules('input_judul', 'isi judul!!!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_konten', 'isi konten!!!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_tanggal', 'isi tanggal!!!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('kategori', 'isi kategori!!!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_penulis', 'isi penulis!!!!', 'required', array('required' => 'isi %s,'));
		$this->form_validation->set_rules('input_sumber', 'isi sumber!!!!', 'required', array('required' => 'isi %s,'));


		if($this->form_validation->run()==FALSE){
			$this->load->view('tambah', $data);
		}
		else{
			if ($this->input->post('simpan')) {
			$upload = $this->artikel->upload();

			if ($upload['result'] == 'success') {
				$this->artikel->insert($upload);
				redirect('blog');
			}else{
				$data['message'] = $upload['error'];
			}
		}

		$this->load->view('home_view', $data);
	}
}

	public function delete($id) {
		$this->load->model('artikel');
		$this->artikel->delete($id);
		redirect('blog');
	}

	public function edit($id){
		$this->load->model('artikel');
		$data['tipe'] = "edit";
		$data['default'] = $this->artikel->get_default($id);

		if(isset($_POST['simpan'])){
			$this->artikel->edit($_POST, $id);
			redirect('home_view');
		}
		$this->load->view("home_viewform", $data);

	}

	// public function datatable()
	// {
	// 	$this->load->model('Artikel');
	// 	$data["Artikel"] = $this->Artikel->get_artikels();
	// 	$this->load->view('home_view', $data);
	// }

}

