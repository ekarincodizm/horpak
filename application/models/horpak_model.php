<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Horpak_model extends CI_Model {

    var $code_id = '';
    var $name_th = '';
    var $name_en = '';
    var $addr_th = '';
    var $addr_en = '';
    var $city = '';
    var $state = '';
    var $province = '';
    var $zipcode = '';
    var $phone = '';
    var $email = '';
    var $contact = '';
    var $desc_th = '';
    var $desc_en = '';
    var $join_date = '';
    
    public function __construct() {
        parent::__construct();
    }

}
