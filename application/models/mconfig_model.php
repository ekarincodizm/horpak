<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MConfig_model extends CI_Model {
    var $array_config = array();
    var $code_id = '';
    var $horpak_id = '';
    var $tax_rate = '';
    var $elec_rate = '';
    var $water_rate = '';
    var $last_update = '';
    var $update_by = '';
    
    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('m_config')->where('code_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('m_config');
        return $query->result_array();
    }

    public function setData($data) {
        $this->code_id = $data['code_id'];
        $this->array_config = array(
            //'code_id' => $data['code'],
            'horpak_id' => $data['horpak_id'],
            'tax_rate' => $data['tax_rate'],
            'elec_rate' => $data['elec_rate'],
            'water_rate' => $data['water_rate'],
            'last_update' => $data['last_update'],
            'update_by' => $data['update_by']
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('m_config');
    }

    public function insertData() {
        return $this->db->insert('m_config', $this->array_config);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('m_config', $this->array_config);
    }

}
