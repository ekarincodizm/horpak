<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MService_model extends CI_Model {

    var $array_service = array();
    var $code_id = '';
    var $horpak_id = '';
    var $service_name = '';
    var $sercice_desc = '';
    var $price = '';
    var $service_status = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('m_service')->where('code_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('m_service');
        return $query->result_array();
    }

    public function setData($data) {
        $this->code_id = $data['code_id'];
        $this->array_service = array(
            'horpak_id' => $data['horpak_id'],
            'service_name' => $data['service_name'],
            'sercice_desc' => $data['sercice_desc'],
            'price' => $data['price'],
            'service_status' => $data['service_status'],
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('m_service');
    }

    public function insertData() {
        return $this->db->insert('m_service', $this->array_service);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('m_service', $this->array_service);
    }

}
