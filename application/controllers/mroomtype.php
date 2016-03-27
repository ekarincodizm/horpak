<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MRoomtype extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');        
    }

    public function index() {
        $this->load->model('mroomtype_model');
        $data['labels'] = $this->mroomtype_model->getDataAll();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/list_roomtype', $data);
        $this->load->view('/include/layout_footer');
    }

    public function getRoomtype() {
        $this->functionhelper->jsonHeader();
        $this->load->model('mroomtype_model');
        $data = array();
        if (empty($_GET['id'])) {
            $data = $this->mroomtype_model;
        } else {
            $data = $this->mroomtype_model->getDataSingle($_GET['id']);
        }
        $this->functionhelper->jsonEncode($data);
    }

    public function saveRoomtype() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('mroomtype_model');
            $this->mroomtype_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->mroomtype_model->insertData();
            } else {
                $exec = $this->mroomtype_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('mroomtype/index'));
        }
    }

    public function deleteRoomtype1($codeId) {
        $this->functionhelper->jsonHeader();
        if (!empty($codeId)) {
            $this->load->model('mroomtype_model');
            $exec = $this->mroomtype_model->deleteData($codeId);
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('mroomtype/index'));
        }
    }

}
