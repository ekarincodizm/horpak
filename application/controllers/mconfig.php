<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MConfig extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');        
    }

    public function index() {
        $this->load->model('mconfig_model');
        $data['configs'] = $this->mconfig_model->getDataAll();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/list_config', $data);
        $this->load->view('/include/layout_footer');
    }

    public function getConfig() {
        $this->functionhelper->jsonHeader();
        $this->load->model('mconfig_model');
        $data = array();
        if (empty($_GET['id'])) {
            $data = $this->mconfig_model;
        } else {
            $data = $this->mconfig_model->getDataSingle($_GET['id']);
        }
        $this->functionhelper->jsonEncode($data);
    }

    public function saveConfig() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('mconfig_model');
            $this->mconfig_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->mconfig_model->insertData();
            } else {
                $exec = $this->mconfig_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('mconfig/index'));
        }
    }

    public function deleteConfig($codeId) {
        $this->functionhelper->jsonHeader();
        if (!empty($codeId)) {
            $this->load->model('mconfig_model');
            $exec = $this->mconfig_model->deleteData($codeId);
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('mconfig/index'));
        }
    }

}
