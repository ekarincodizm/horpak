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

    public  function jsonEncode($string) {        
        echo json_encode($string);
    }

    public  function jsonDecode() {
        echo json_decode($string);
    }

}
