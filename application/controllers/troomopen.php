<?php

class TRoomopen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');
    }

    public function index() {
        $this->load->model('mroom_model');
        $data['rooms'] = $this->mroom_model->getDataAll();

        $this->load->view('/include/layout_header');
        $this->load->view('/room_open', $data);
        $this->load->view('/include/layout_footer');
    }

}
