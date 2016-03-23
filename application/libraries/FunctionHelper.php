<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FunctionHelper {

    var $status = false;
    var $title = '';
    var $message = '';
    var $url = '';

    public function __construct() {
        
    }
    
    public function jsonHeader(){
        header('Content-Type: application/json');
    }

    public function jsonEncode($string) {
        echo json_encode($string);
    }

    public function jsonDecode($json) {
        echo json_decode($json);
    }

    public function jsonResponseBasic($status, $message, $url) {
        echo json_encode(array(
            'status' => $status,
            'message' => $message,
            'url' => $url
        ));
    }

    public function jsonResponseFull($status, $title, $message, $url) {
        echo json_encode(array(
            'status' => $status,
            'title' => $title,
            'message' => $message,
            'url' => $url
        ));
    }

    public function jsonDataResponseFull($status, $title, $message, $url, $data) {
        echo json_encode(array(
            'status' => $status,
            'title' => $title,
            'message' => $message,
            'url' => $url,
            'data' => $data
        ));
    }

}
