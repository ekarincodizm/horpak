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
        $this->load->model('amphur_model');
        $amphurInProovince = $this->amphur_model->getDataAllByProvince($provinceId);
        $jsonDropdown = array();
        foreach ($amphurInProovince as $index => $amphur) {
            $jsonDropdown[] = array(
                "name" => $amphur['amphur_name'],
                "value" => $amphur['amphur_id']
            );
        }

        echo json_encode(array(
            "success" => true,
            "results" => $jsonDropdown
        ));
    }

}
