<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Province_model extends CI_Model {

    var $array_province = array();
    var $province_id = '';
    var $province_code = '';
    var $province_name = '';
    var $geo_id = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('u_province')->where('province_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $this->db->from('u_province');
        $this->db->order_by('province_name', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function setData($data) {
        $this->province_id = $data['province_id'];
        $this->array_province = array(
            'province_code' => $data['province_code'],
            'province_name' => $data['province_name'],
            'geo_id' => $data['geo_id'],
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('province_id', $id);
        return $this->db->delete('u_province');
    }

    public function insertData() {
        return $this->db->insert('u_province', $this->array_province);
    }

    public function updateData() {
        $this->db->where('province_id', $this->province_id);
        return $this->db->update('u_province', $this->array_province);
    }

}
