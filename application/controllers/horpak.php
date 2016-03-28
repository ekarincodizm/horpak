<?php

class Horpak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');
    }

    public function index() {
        $data['features'] = $this->corehelper->getFeaturesMain();
        $this->load->view('/include/layout_header');
        $this->load->view('main_menu', $data);
        $this->load->view('/include/layout_footer');
    }

    public function subMenu($feature = null) {
        $data['features'] = $this->corehelper->getFeaturesSubCore();
        $this->load->view('/include/layout_header');
        $this->load->view('sub_menu', $data);
        $this->load->view('/include/layout_footer');
    }

    public function doFeature($feature = null) {
        $this->load->view('/include/layout_header');
        $this->load->view('feature', array(
            'feature' => $feature
        ));
        $this->load->view('/include/layout_footer');
    }
    
    public function horpaks(){
        $this->load->model('phorpak_model');
        $data['horpaks'] = $this->phorpak_model->getDataAll();

        $this->load->view('/include/layout_header');
        $this->load->view('/private/list_horpak', $data);
        $this->load->view('/include/layout_footer');
    }

    public function register() {
        $this->load->model('province_model');
        $data['provinces'] = $this->province_model->getDataAll();
        $this->load->view('/include/layout_header');
        $this->load->view('register_horpak', $data);
        $this->load->view('/include/layout_footer');
    }

    public function register_horpak() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {        	
            $this->load->model('user_model');
            $chkUser=$this->user_model->chk_username($_POST['user_name']);
        	if($chkUser=='dup'){
        		$this->functionhelper->jsonResponseFull(false, 'ไม่สามารถลงทะเบียนได้', 'User Name ได้ถูกใช้งานไปแล้วกรุณาเปลี่ยน User Name ใหม่ค่ะ', '');
        	}else{
        		$this->load->model('phorpak_model');
            	$this->phorpak_model->setData($_POST);
                $exec = $this->phorpak_model->insertData();
                if($exec){
                	$horpak_id=$this->db->insert_id();
                	$this->user_model->setDataRegister($_POST,$horpak_id);
                	$this->user_model->insertData();
            		$this->functionhelper->jsonResponseFull(true, 'ลงทะเบียนเรียบร้อย', 'ท่านสามารถ Login เข้าใช้งานระบบได้ โดยใช้ User Name และ Password ที่ได้ลงทะเบียนไว้ได้เลยค่ะ', site_url('user/login'));
                }
            	
        	}
        }
    }

}
