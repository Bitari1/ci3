<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'nama' => $this->input->post('nama'),
            'kodepos' => $this->input->post('kodepos'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('password'),
            'password' =>$enc_password,
            'fk_level_id' => $this->input->post('membership'),
        );

        // Insert user
        return $this->db->insert('users', $data);
    }

    // Proses login user
    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');


        if($result->num_rows() == 1){
            return $result->row(0)->user_id;
        } else {
            return false;
        }
    }

    public function get_user_level($user_id) {
        // Dapatkan data level
        $this->db->select('fk_level_id');
        $this->db->where('user_id', $user_id);
        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            return $result->row(0)->fk_level_id;
            } else {
            return false;
         }
     }

     public function get_user_details( $username )
         {
            $this->db->join('levels', 'levels.level_id = users.fk_level_id', 'left');
            $this->db->where('username', $username);
            
            $result = $this->db->get('users');
            if ($result->num_rows() == 1) {
                return $result->row();
                } else {
                return false;
             }
         }

}
