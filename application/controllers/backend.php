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

    public function index() {
        $data['menus'] = $this->corehelper->getBackendMenu();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/dashboard', $data);
        $this->load->view('/include/layout_footer');
    }

    /*
     * Horpak Crud
     */

    public function horpak($id = null) {
        $this->load->model('horpak_model');
        if (empty($id)) {
            $data['horpak'] = $this->horpak_model;
        } else {
            $data['horpak'] = $this->horpak_model->getDataSingle($id);
        }
        $data['horpaks'] = $this->horpak_model->getDataAll();
        $this->load->view('/include/layout_header');
        $this->load->view('/private/horpak_crud', $data);
        $this->load->view('/include/layout_footer');
    }

    public function saveHorpak() {
        $exec = false;
        $this->load->model('horpak_model');
        if (!empty($_POST)) {
            $this->horpak_model->setData($_POST);
            if (empty($_POST['code'])) {
                $exec = $this->horpak_model->insertData();
            } else {
                $exec = $this->horpak_model->updateData();
            }
            if ($exec) {
                redirect('/backend/horpak', 'refresh');
            }
        }
    }

    public function deleteHorpak($id) {
        $this->load->model('horpak_model');
        if ($this->horpak_model->deleteData($id)) {
            redirect('/backend/horpak', 'refresh');
        }
    }

    /*
     * Horpak Crud
     */


    /*
     * RoomType Crud
     */

    public function roomType() {
        $this->load->model('RoomType_model');
        $data['roomtypes'] = $this->RoomType_model->getDataAll();
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
