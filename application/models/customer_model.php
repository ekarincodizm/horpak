<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Customer_model extends CI_Model {

    var $array_customer = array();
    var $code_id = '';
    var $horpak_id = '';
    var $fname = '';
    var $lname = '';
    var $id_card = '';
    var $birth_day = '';
    var $addr = '';
    var $city = '';
    var $state = '';
    var $province = '';
    var $zipcode = '';
    var $email = '';
    var $mobile = '';
    var $avatar = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('p_customer')->where('code_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('p_customer');
        return $query->result_array();
    }

    public function setData($data) {
        $this->code_id = $data['code_id'];
        $this->array_customer = array(
            'code_id' => $data['code_id'],
            'horpak_id' => $data['horpak_id'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'id_card' => $data['id_card'],
            'birth_day' => $data['birth_day'],
            'addr' => $data['addr'],
            'city' => $data['city'],
            'state' => $data['state'],
            'province' => $data['province'],
            'zipcode' => $data['zipcode'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'avatar' => $data['avatar'],
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('p_customer');
    }

    public function insertData() {
        return $this->db->insert('p_customer', $this->array_customer);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('p_customer', $this->array_customer);
    }

}
