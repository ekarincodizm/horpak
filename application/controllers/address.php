<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Address extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function getProvince() {
        header('Content-Type: application/json');
        $this->load->model('province_model');
        echo json_encode($this->province_model->getDataAll());
    }

    public function getAmphur() {
        $provinceId = $_GET['provinceId'];
        header('Content-Type: application/json');

        $this->db
                ->select('amphur_name as name,amphur_id as value')
                ->from('u_amphur')->where('province_id', $provinceId);
        $query = $this->db->get();
        $jsonDropdown = $query->result_array();

        echo json_encode(array(
            "success" => true,
            "results" => $jsonDropdown
        ));
    }
    
    public function getCity() {
        $amphur = $_GET['state'];
        header('Content-Type: application/json');

        $this->db
                ->select('district_name as name,district_id as value')
                ->from('u_district')->where('amphur_id', $amphur);
        $query = $this->db->get();
        $jsonDropdown = $query->result_array();

        echo json_encode(array(
            "success" => true,
            "results" => $jsonDropdown
        ));
    }
    
    public function getZipcode() {
        $amphur = $_GET['amphur'];
        header('Content-Type: application/json');
        $this->db
                ->select('postcode')
                ->from('u_amphur')->where('amphur_id', $amphur);
        $query = $this->db->get();
        $jsonZipcode = $query->row();

        echo json_encode(array(
            "success" => true,
            "results" => $jsonZipcode
        ));
    }

}
