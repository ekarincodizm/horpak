<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Label_model extends CI_Model {

    var $array_label = array();
    var $c_group = '';
    var $c_label = '';
    var $c_value = '';
    var $order_by = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('m_label')->where('c_group', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('m_label');
        return $query->result_array();
    }

    public function setData($data) {
        $this->c_group = $data['c_group'];
        $this->array_label = array(
            //'c_group' => $data['code'],
            'c_group' => $data['c_group'],
            'c_label' => $data['c_label'],
            'c_value' => $data['c_value'],
            'order_by' => $data['order_by'],
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('c_group', $id);
        return $this->db->delete('m_label');
    }

    public function insertData() {
        return $this->db->insert('m_label', $this->array_label);
    }

    public function updateData() {
        $this->db->where('c_group', $this->c_group);
        return $this->db->update('m_label', $this->array_label);
    }

}
