<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

public function create()
 {
 // Judul Halaman
 $data['page_title'] = 'Buat Kategori';
 // Form validasi untuk Nama Kategori
 $this->form_validation->set_rules(
 'cat_name',
 'Nama Kategori',
 'required|is_unique[categories.cat_name]',
 array(
 'required' => 'Isi %s donk, males amat.',
 'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada
bosque.'
 )
 );
}if($this->form_validation->run() === FALSE){
 $this->load->view('templates/header');
 $this->load->view('categories/cat_create', $data);
 $this->load->view('templates/footer');
 } else {
 $this->category_model->create_category();
 redirect('category');
 }

 public function index()
 {
 // Judul Halaman
 $data['page_title'] = 'List Kategori';
 // Dapatkan semua kategori
 $data['categories'] = $this->category_model->get_all_categories();
 $this->load->view('templates/header');
 $this->load->view('categories/cat_view', $data);
 $this->load->view('templates/footer');
 }

 }

