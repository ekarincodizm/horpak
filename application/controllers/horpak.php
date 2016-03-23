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
