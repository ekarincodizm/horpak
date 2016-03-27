<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MService extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');        
    }

    public function index() {
        $this->load->model('mservice_model');
        $data['services'] = $this->mservice_model->getDataAll();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/list_service', $data);
        $this->load->view('/include/layout_footer');
    }

    public function getService() {
        $this->functionhelper->jsonHeader();
        $this->load->model('mservice_model');
        $data = array();
        if (empty($_GET['id'])) {
            $data = $this->mservice_model;
        } else {
            $data = $this->mservice_model->getDataSingle($_GET['id']);
        }
        $this->functionhelper->jsonEncode($data);
    }

    public function saveService() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('mservice_model');
            $this->mservice_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->mservice_model->insertData();
            } else {
                $exec = $this->mservice_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('mservice/index'));
        }
    }

    public function deleteService($codeId) {
        $this->functionhelper->jsonHeader();
        if (!empty($codeId)) {
            $this->load->model('mservice_model');
            $exec = $this->mservice_model->deleteData($codeId);
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('mservice/index'));
        }
    }

}
