<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

public function index()
{
    $this->load->model('category_model');

    $data['categories'] = $this->category_model->get_categories();

    $this->load->view('tampil_category', $data);
}
 

    public function detail($id)
    {
        $this->load->model('category_model');
        $data['detail'] = $this->category_model->get_single($id_cat);
        $this->load->view('category_detail', $data);
    }



 public function create()
    {
        $this->load->model('category_model');
        $data = array();
        $this->load->library('form_validation');
        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules('cat_name', 'cat_name', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('cat_description', 'description', 'required', array('required' => '%s harus diisi'));
        // $this->form_validation->set_rules(
        //     'cat_name','Nama Kategori','required|is_unique[categories.cat_name]',
        //     array(
        //         'required' => 'Isi %s donk, males amat.',
        //         'is_unique' => 'isi %s sudah ada bosque.'
        //     ) 

        if($this->form_validation->run() === FALSE){
            $this->load->view('form_category', $data);
        } else {
            $this->category_model->create_category();
            redirect('Category');            
        }
    }

    public function delete($id_cat){
        $this->load->model('category_model');
        $this->category_model->delete($id_cat);
        redirect('Category');

    }


    public function edit($id_cat){
        $this->load->model('category_model');
        $data['tipe'] = "Edit";
        $data['default'] = $this->category_model->get_single($id_cat);

        if(isset($_POST['simpan'])){
            $this->category_model->update($_POST, $id_cat);
            redirect('tampil_category');
        }

        $this->load->view('form_category',$data);
    }


}