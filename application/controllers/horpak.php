<?php

class Horpak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('corehelper');
    }

    public function index() {
        $data['features'] = $this->corehelper->getFeaturesMain();
        $this->load->view('/include/layout_header');
        $this->load->view('main_menu', $data);
        $this->load->view('/include/layout_footer');
    }

    public function login() {
        $this->load->view('/include/layout_header');
        $this->load->view('/login');
        $this->load->view('/include/layout_footer');
    }

    public function register() {
        if (empty($_POST)) {
            $this->load->model('province_model');
            $provinces = $this->province_model->getDataAll();
            $this->load->view('/include/layout_header');
            $this->load->view('/register', array(
                'provinces' => $provinces
            ));
            $this->load->view('/include/layout_footer');
        } else {
            $this->load->model('customer_model');
            $this->customer_model->setData($_POST);
            $save = $this->customer_model->insertData();
            if ($save) {
                redirect('/horpak/index', 'refresh');
            }
        }
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

}
