<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PCustomer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');
        $this->load->library('session');
        $this->load->model('pcustomer_model');
    }

    public function saveCustomer() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $_POST['horpak_id'] = $this->session->userdata('horpak_id');
            $this->pcustomer_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->pcustomer_model->insertData();
            } else {
                $exec = $this->pcustomer_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('troomopen/checkin'));
        }
    }

}
