<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('corehelper');
    }

    public function index() {
        $this->load->view('/include/layout_header');
        $this->load->view('index');
        $this->load->view('/include/layout_footer');
    }
    
    public function login() {
        $this->load->view('/include/layout_header');
        $this->load->view('login');
        $this->load->view('/include/layout_footer');
    }

}
