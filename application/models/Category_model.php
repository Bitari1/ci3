<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

public function get_single($id_cat)
{
  $query = $this->db->query('SELECT * from categories where id_cat='.$id_cat);
  return $query->result();
}

public function create_category()
   {
       $data = array(
           'cat_name'          => $this->input->post('cat_name'),
           'cat_description'   => $this->input->post('cat_description')
       );

       return $this->db->insert('categories', $data);
   }
//tambahkan fungsi get
   public function get_categories()
   {
   	$query = $this->db->get('categories');
   	return $query->result();
   }


	public function update($post, $id_cat){
		$cat_name = $this->db->escape($post['cat_name']);
		$cat_description = $this->db->escape($post['cat_description']);
		
		$sql = $this->db->query('UPDATE categories SET cat_name = $cat_name, cat_description = $cat_description WHERE id_cat = '.intval($id_cat));

		return TRUE;

	}



   public function delete($id_cat){
		$query = $this->db->query('DELETE from categories WHERE id_cat= '.$id_cat);

}
}
