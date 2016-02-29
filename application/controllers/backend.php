<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Backend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
    }
    
    public function index(){
        $data['menus'] = $this->corehelper->getBackendMenu();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/dashboard', $data);
        $this->load->view('/include/layout_footer');
    }

    /*
     * Horpak Crud
     */

    public function horpak() {
        $query = $this->db->query('SELECT * FROM p_horpak');
        $data['horpaks'] = $query->result_array();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/horpak_crud', $data);
        $this->load->view('/include/layout_footer');
    }

    public function saveHorpak() {
        
    }

    public function deleteHorpak() {
        
    }

    /*
     * Horpak Crud
     */


    /*
     * RoomType Crud
     */

    public function roomType() {
        $this->load->model('RoomType_model');
        $data['roomtypes'] =  $this->RoomType_model->getDataAll();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/roomType_crud', $data);
        $this->load->view('/include/layout_footer');
    }

    public function saveroomType() {
        
    }

    public function deleteroomType() {
        
    }

    /*
     * RoomType Crud
     */
}
