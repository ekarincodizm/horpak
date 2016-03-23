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

    public function saveConfig() {
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('config_model');
            $this->config_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->config_model->insertData();
            } else {
                $exec = $this->config_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('backend/config'));
        }
    }

    public function deleteConfig($codeId) {
        if (!empty($codeId)) {
            $this->load->model('config_model');
            $exec = $this->config_model->deleteData($codeId);
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('backend/config'));
        }
    }

    public function getLabel() {
        $this->load->model('label_model');
        $data = array();
        if (empty($_GET['id'])) {
            $data = $this->label_model;
        } else {
            $data = $this->label_model->getDataSingle($_GET['id']);
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
