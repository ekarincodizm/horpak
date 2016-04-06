<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TFine_model extends CI_Model {

    var $array_fine = array();
    var $code_id = '';
    var $horpak_id = '';
    var $open_id = '';
    var $fine_id = '';
    var $price = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('t_fine')->where('code_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('t_fine');
        return $query->result_array();
    }

    public function setData($data) {
        $this->code_id = $data['code_id'];
        $this->array_fine = array(
            'horpak_id' => $data['horpak_id'],
            'open_id' => $data['open_id'],
            'fine_id' => $data['fine_id'],
            'price' => $data['price']
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('t_fine');
    }

    public function insertData() {
        return $this->db->insert('t_fine', $this->array_fine);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('t_fine', $this->array_fine);
    }

}
