<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MFine extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');
    }

    public function index() {
        $this->load->model('mfine_model');
        $data['fines'] = $this->mfine_model->getDataAll();

        $this->load->view('/include/layout_header');
        $this->load->view('/private/list_fine', $data);
        $this->load->view('/include/layout_footer');
    }

    public function getFine() {
        $this->functionhelper->jsonHeader();
        $this->load->model('mfine_model');
        $data = array();
        if (empty($_GET['id'])) {
            $data = $this->mfine_model;
        } else {
            $data = $this->mfine_model->getDataSingle($_GET['id']);
        }
        $this->functionhelper->jsonEncode($data);
    }

    public function saveFine() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('mfine_model');
            $this->mfine_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->mfine_model->insertData();
            } else {
                $exec = $this->mfine_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('mfine/index'));
        }
    }

    public function deleteFine($codeId) {
        $this->functionhelper->jsonHeader();
        if (!empty($codeId)) {
            $this->load->model('mfine_model');
            $exec = $this->mfine_model->deleteData($codeId);
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('mfine/index'));
        }
    }

}
