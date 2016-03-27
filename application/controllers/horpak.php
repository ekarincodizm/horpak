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

    public function saveHorpak() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('phorpak_model');
            $this->phorpak_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->phorpak_model->insertData();
            } else {
                $exec = $this->phorpak_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('horpak/index'));
        }
    }

}
