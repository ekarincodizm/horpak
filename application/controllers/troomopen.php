<?php

class TRoomopen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('functionhelper');
    }

    public function checkin() {
        $this->load->model('mroom_model');
        $data['rooms'] = $this->mroom_model->getDataAll();
        
        $this->load->model('pcustomer_model');
        $data['customers'] = $this->pcustomer_model->getDataAll();

        $this->load->view('/include/layout_header');
        $this->load->view('/room_checkin', $data);
        $this->load->view('/include/layout_footer');
        $this->load->view('/modal_customer_search',$data);
    }
    public function checkout() {
        $this->load->model('mroom_model');
        $data['rooms'] = $this->mroom_model->getDataAll();
        
        $this->load->model('pcustomer_model');
        $data['customers'] = $this->pcustomer_model->getDataAll();

        $this->load->view('/include/layout_header');
        $this->load->view('/room_checkout', $data);
        $this->load->view('/include/layout_footer');
        
        $this->load->view('/modal_room_search',$data);
        $this->load->view('/modal_customer_search',$data);
    }
    

}
