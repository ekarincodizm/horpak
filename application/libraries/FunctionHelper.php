<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FunctionHelper {

    public function __construct() {
        header('Content-Type: application/json');
    }

    public function jsonEncode($string) {
        echo json_encode($string);
    }

    public function jsonDecode($json) {
        echo json_decode($json);
    }

    public function jsonResponse($status, $message, $url) {
        echo json_decode(array(
            'status' => $status,
            'message' => $message,
            'url' => $url
        ));
    }

    public function jsonDataResponse($status, $message, $url, $data) {
        echo json_encode(array(
            'status' => $status,
            'message' => $message,
            'url' => $url,
            'data' => $data
        ));
    }

}
