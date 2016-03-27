<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MLabel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');        
    }

    public function index() {
        $this->load->model('mlabel_model');
        $data['labels'] = $this->mlabel_model->getDataAll();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/list_label', $data);
        $this->load->view('/include/layout_footer');
    }

    public function getLabel() {
        $this->functionhelper->jsonHeader();
        $this->load->model('mlabel_model');
        $data = array();
        if (empty($_GET['id'])) {
            $data = $this->mlabel_model;
        } else {
            $data = $this->mlabel_model->getDataSingle($_GET['id']);
        }
        $this->functionhelper->jsonEncode($data);
    }

    public function saveLabel() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('mlabel_model');
            $this->mlabel_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->mlabel_model->insertData();
            } else {
                $exec = $this->mlabel_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('mlabel/index'));
        }
    }

    public function deleteLabel($codeId) {
        $this->functionhelper->jsonHeader();
        if (!empty($codeId)) {
            $this->load->model('mlabel_model');
            $exec = $this->mlabel_model->deleteData($codeId);
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('mlabel/index'));
        }
    }

}
