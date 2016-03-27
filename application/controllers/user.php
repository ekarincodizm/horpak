<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');
        $this->load->library('session');
    }

    public function login() {
        if (!empty($_POST)) {
            $this->functionhelper->jsonHeader();
            $status = true;
            $this->load->model('user_model');
            $user = $this->user_model->getDataAttributes($_POST);
            if (empty($user)) {
                $status = false;
                $user = $this->user_model;
            }
            $this->session->set_userdata(array('user', $user));
            $this->functionhelper->jsonDataResponseFull(
                    $status, 'สถานะการเข้าใช้งานระบบ', 'ไม่พบข้อมูลผู้ใช้งานในระบบ', site_url('horpak/index'), $user);
        } else {
            $this->load->view('/include/layout_header');
            $this->load->view('/login');
            $this->load->view('/include/layout_footer');
        }
    }

    public function register() {        
        if (!empty($_POST)) {
            $this->functionhelper->jsonHeader();
            $this->load->model('customer_model');
            $this->customer_model->setData($_POST);
            $save = $this->customer_model->insertData();
            $this->functionhelper->jsonResponseFull(
                    $save, 'สถานะการเข้าใช้งานระบบ', 'ไม่พบข้อมูลผู้ใช้งานในระบบ', site_url('horpak/index'));
        } else {
            $this->load->model('province_model');
            $provinces = $this->province_model->getDataAll();
            $this->load->view('/include/layout_header');
            $this->load->view('/register_user', array(
                'provinces' => $provinces
            ));
            $this->load->view('/include/layout_footer');
        }
    }

    public function logout() {
        
    }

    public function changeProfile() {
        
    }

}
