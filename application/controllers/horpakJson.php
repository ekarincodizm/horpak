<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HorpakJson extends CI_Controller {

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
            $status = true;
            $this->load->model('user_model');
            $user = $this->user_model->getDataAttributes($_POST);
            if (empty($user)) {
                $status = false;
                $user = $this->user_model;
            }
            $this->session->set_userdata(array('user', $user));
            $this->functionhelper->jsonDataResponse($status, 'ไม่พบข้อมูลผู้ใช้งานในระบบ', site_url('horpak/index'), $user);
        }
    }

    public function register() {
        
    }

    public function logout() {
        
    }

    public function changeProfile() {
        
    }

}
