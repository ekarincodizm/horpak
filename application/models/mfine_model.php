<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MFine_model extends CI_Model {
    var $array_fine = array();
    var $code_id = '';
    var $horpak_id = '';
    var $fine_name = '';
    var $fine_desc = '';
    var $std_price = '';
    
    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('m_fine')->where('code_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('m_fine');
        return $query->result_array();
    }

    public function setData($data) {
        $this->code_id = $data['code_id'];
        $this->array_fine = array(
            //'code_id' => $data['code'],
            'horpak_id' => $data['horpak_id'],
            'fine_name' => $data['fine_name'],
            'fine_desc' => $data['fine_desc'],
            'std_price' => $data['std_price']
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('m_fine');
    }

    public function insertData() {
        return $this->db->insert('m_fine', $this->array_fine);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('m_fine', $this->array_fine);
    }

}
