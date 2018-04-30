<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

public function index()
{
    $this->load->model('category_model');

    $data['Category'] = $this->category_model->get_categories();

    $this->load->view('tampil_category', $data);
}


    public function detail($id)
    {
        $this->load->model('category_model');
        $data['detail'] = $this->category_model->get_single($id);
        $this->load->view('category_detail', $data);
    }



 public function create()
    {
        $this->load->model('category_model');

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name','Nama Kategori','required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'isi %s sudah ada bosque.'
            )
        );

        if($this->form_validation->run() === FALSE){
            $this->load->view('form_category');
        } else {
            $this->category_model->create_category();
            redirect('Category');            
        }
    }

    public function delete($id){
        $this->load->model('category_model');
        $this->category_model->delete($id);
        redirect('Category');

    }


    public function edit($id){
        $this->load->model('category_model');
        $data['tipe'] = "Edit";
        $data['default'] = $this->category_model->get_single($id);

        if(isset($_POST['simpan'])){
            $this->category_model->update($_POST, $id);
            redirect('tampil_category');
        }

        $this->load->view("form_category",$data);
    }


}