<?php

class RoomType_model extends CI_Model {

    var $code_id = '';
    var $horpak_id = '';
    var $type_name = '';
    var $type_desc = '';
    var $std_price = '';

    public function __construct() {
        parent::__construct();
    }

    public function getDataAll() {
        $query = $this->db->get('m_room_type');
        return $query->result_array();
    }
    public function getDataSingle() {
        $query = $this->db->get('m_room_type');
        return $query->result();
    }

}
