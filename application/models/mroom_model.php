<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MRoom_model extends CI_Model {

    var $array_room = array();
    var $code_id = '';
    var $horpak_id = '';
    var $type_id = '';
    var $room_no = '';
    var $floor = '';
    var $price = '';
    var $room_status = '';
    var $room_desc = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('m_room')->where('code_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('m_room');
        return $query->result_array();
    }

    public function setData($data) {
        $this->code_id = $data['code_id'];
        $this->array_room = array(
            'horpak_id' => $data['horpak_id'],
            'type_id' => $data['type_id'],
            'room_no' => $data['room_no'],
            'floor' => $data['floor'],
            'price' => $data['price'],
            'room_status' => $data['room_status'],
            'room_desc' => $data['room_desc'],
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('m_room');
    }

    public function insertData() {
        return $this->db->insert('m_room', $this->array_room);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('m_room', $this->array_room);
    }

}
