<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BackendJson extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');
    }

    public function getHorpak() {
        $this->load->model('horpak_model');
        $data = array();
        if (empty($_POST['id'])) {
            $data = $this->horpak_model;
        } else {
            $data = $this->horpak_model->getDataSingle($_POST['id']);
        }
        $this->functionhelper->jsonEncode($data);
    }

    public function getConfig() {
        $this->load->model('config_model');
        $data = array();
        if (empty($_GET['id'])) {
            $data = $this->config_model;
        } else {
            $data = $this->config_model->getDataSingle($_GET['id']);
        }
        $this->functionhelper->jsonEncode($data);
    }

    public function deleteHorpak() {
        $this->load->model('horpak_model');
        $this->functionhelper->jsonEncode(array(
            'status' => $this->horpak_model->deleteData($_POST['id']),
            'message' => '',
        ));
    }

}
