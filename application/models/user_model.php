<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_model extends CI_Model {

    var $array_user = array();
    var $user = array();
    var $code_id = '';
    var $user_name = '';
    var $user_pass = '';
    var $fb_id = '';
    var $customer_id = '';
    var $horpak_id = '';
    var $user_type = '';
    var $user_level = '';
    var $join_date = '';
    var $user_status = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataAttributes($user) {
        $this->db->from('p_user')
                ->where('user_name', $user['user_name'])
                ->where('user_pass', $user['user_pass']);
        $userData = $this->db->get()->row();
        return $userData;
    }

    public function getDataSingle($id) {
        $this->db->from('p_user')->where('code_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('p_user');
        return $query->result_array();
    }

    public function setDataRegister($data,$horpak_id) {
        $this->code_id = 0;
        $this->array_user = array(
            'horpak_id' => $horpak_id,
            'user_name' => $data['user_name'],
            'user_pass' => $data['user_pass'],
            'join_date' => date('Y-m-d'),
            'user_status' => '1',
            'user_level' => 'N',
            'user_type' => 'H'
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('p_user');
    }

    public function insertData() {
        return $this->db->insert('p_user', $this->array_user);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('p_user', $this->array_user);
    }
	public function chk_username($user_name){
		$query = $this->db->query("SELECT * FROM p_user where user_name='$user_name'");
        if ($query->num_rows() > 0){
        	return "dup";
        }else{
        	return "ok";
        }	 		
	}
}
