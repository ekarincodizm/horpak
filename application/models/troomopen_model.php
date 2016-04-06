<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TRoomopen_model extends CI_Model {

    var $array_room_open = array();
    var $code_id = '';
    var $horpak_id = '';
    var $customer_id = '';
    var $room_id = '';
    var $rent_type_id = '';
    var $adv_mny = '';
    var $ins_mny = '';
    var $price = '';
    var $eff_date = '';
    var $end_date = '';
    var $open_status = '';
    var $remark = '';
    var $create_by = '';
    var $create_date = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataSingle($id) {
        $this->db->from('t_room_open')->where('code_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getDataAll() {
        $query = $this->db->get('t_room_open');
        return $query->result_array();
    }

    public function getDataAllRoomCheckIn() {
        /*
         * SELECT 
          ro.*,pc.fname fname,pc.lname lname,r.room_no room_no,r.floor,r.price
          FROM `t_room_open` ro
          LEFT JOIN p_customer pc ON pc.code_id = ro.customer_id
          LEFT JOIN m_room r ON r.code_id = ro.room_id
         */
        $query = $this->db->select('ro.*,pc.fname fname,pc.lname lname,pc.addr address,pc.id_card id_card,r.room_no room_no,r.floor,r.price ')
                ->from('t_room_open ro')
                ->join('p_customer pc', 'pc.code_id = ro.customer_id', 'left')
                ->join('m_room r', 'r.code_id = ro.room_id', 'left')
                ->get();
        return $query->result_array();
    }

    public function setData($data) {
        $this->code_id = $data['code_id'];
        $this->array_room_open = array(
            'horpak_id' => $data['horpak_id'],
            'customer_id' => $data['customer_id'],
            'room_id' => $data['room_id'],
            'rent_type_id' => $data['rent_type_id'],
            'adv_mny' => $data['adv_mny'],
            'ins_mny' => $data['ins_mny'],
            'price' => $data['price'],
            'eff_date' => $data['eff_date'],
            'end_date' => $data['end_date'],
            'open_status' => $data['open_status'],
            'remark' => $data['remark'],
            'create_by' => $data['create_by'],
            'create_date' => $data['create_date'],
        );
    }

    public function getData() {
        return $this;
    }

    public function deleteData($id) {
        $this->db->where('code_id', $id);
        return $this->db->delete('t_room_open');
    }

    public function insertData() {
        return $this->db->insert('t_room_open', $this->array_room_open);
    }

    public function updateData() {
        $this->db->where('code_id', $this->code_id);
        return $this->db->update('t_room_open', $this->array_room_open);
    }

    public function updateStatus($status, $Id) {
        $this->db->where('code_id', $Id);
        return $this->db->update('t_room_open', array(
                    'open_status' => $status
        ));
    }

}
