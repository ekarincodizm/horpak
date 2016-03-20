<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Amphur_model extends CI_Model {

    var $array_amphur = array();
    var $amphur_id = '';
    var $amphur_code = '';
    var $amphur_name = '';
    var $postcode = '';
    var $geo_id = '';
    var $province_id = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('u_amphur')->where('amphur_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
     public function getDataAllByProvince($provinceId) {
        $this->db->from('u_amphur')->where('province_id', $provinceId);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDataAll() {
        $query = $this->db->get('u_amphur');
        return $query->result_array();
    }

    public function setData($data) {
        $this->amphur_id = $data['amphur_id'];
        $this->array_amphur = array(
            'amphur_code' => $data['amphur_code'],
            'amphur_name' => $data['amphur_name'],
            'postcode' => $data['postcode'],
            'geo_id' => $data['geo_id'],
            'province_id' => $data['province_id']
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('amphur_id', $id);
        return $this->db->delete('u_amphur');
    }

    public function insertData() {
        return $this->db->insert('u_amphur', $this->array_amphur);
    }

    public function updateData() {
        $this->db->where('amphur_id', $this->amphur_id);
        return $this->db->update('u_amphur', $this->array_amphur);
    }

}
