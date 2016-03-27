<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MRoom extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');        
    }

    public function index() {
        $this->load->model('mroom_model');
        $data['labels'] = $this->mroom_model->getDataAll();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/list_room', $data);
        $this->load->view('/include/layout_footer');
    }

    public function getRoom() {
        $this->functionhelper->jsonHeader();
        $this->load->model('mroom_model');
        $data = array();
        if (empty($_GET['id'])) {
            $data = $this->mroom_model;
        } else {
            $data = $this->mroom_model->getDataSingle($_GET['id']);
        }
        $this->functionhelper->jsonEncode($data);
    }

    public function saveRoom() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('mroom_model');
            $this->mroom_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->mroom_model->insertData();
            } else {
                $exec = $this->mroom_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('mroom/index'));
        }
    }

    public function deleteRoom($codeId) {
        $this->functionhelper->jsonHeader();
        if (!empty($codeId)) {
            $this->load->model('mroom_model');
            $exec = $this->mroom_model->deleteData($codeId);
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('mroom/index'));
        }
    }

}
