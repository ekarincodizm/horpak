<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
    }

    public function login() {        
        $this->load->view('/login');
    }

    public function register() {
        
    }

    public function logout() {
        
    }

    public function changeProfile() {
        
    }

}