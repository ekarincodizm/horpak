<?php

class Example extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');
    }

    public function validate() {
        $this->load->view('/include/layout_header');
        $this->load->view('/example/validate');
        $this->load->view('/include/layout_footer');
    }

}
