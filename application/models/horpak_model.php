<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Horpak_model extends CI_Model {

    var $array_horpak = array();
    var $code_id = '';
    var $name_th = '';
    var $name_en = '';
    var $addr_th = '';
    var $addr_en = '';
    var $city = '';
    var $state = '';
    var $province = '';
    var $zipcode = '';
    var $phone = '';
    var $email = '';
    var $contact = '';
    var $desc_th = '';
    var $desc_en = '';
    var $join_date = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $query = $this->db->get('p_horpak', $id);
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('p_horpak');
        return $query->result_array();
    }

    public function setData($data) {
        $this->code_id = $data['code'];
        $this->array_horpak = array(
            //'code_id' => $data['code'],
            'name_th' => $data['name_th'],
            'name_en' => $data['name_en'],
            'addr_th' => $data['addr_th'],
            'addr_en' => $data['addr_en'],
            'city' => $data['city'],
            'state' => $data['state'],
            'province' => $data['province'],
            'zipcode' => $data['zipcode'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'desc_th' => $data['desc_th'],
            'desc_en' => $data['desc_en'],
            'join_date' => date('Y-m-d')
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('p_horpak');
    }

    public function insertData() {
        return $this->db->insert('p_horpak', $this->array_horpak);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('p_horpak', $this->array_horpak);
    }

}
