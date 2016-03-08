<!DOCTYPE html>
<html>
    <head>
        <title>The Materialize Example</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="<?php echo base_url() . "semantic/semantic.min.css" ?>">
        <link rel="stylesheet" href="<?php echo base_url() . "css/font-awesome.min.css" ?>">

        <link rel="stylesheet" href="<?php echo base_url() . 'plugins/jquery-confirm/css/jquery-confirm.css' ?>">

        <link rel="stylesheet" href="<?php echo base_url() . 'css/horpak-style.css' ?>">


        <script type="text/javascript" src="<?php echo base_url() . "js/jquery-1.11.2.min" ?>"></script>           
        <script type="text/javascript" src="<?php echo base_url() . "semantic/semantic.min.js" ?>"></script>   
        <script type="text/javascript" src="<?php echo base_url() . "js/validate/jquery.validate.min" ?>"></script>   

        <script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>

        <script type="text/javascript" src="<?php echo base_url() . 'js/custom/horpak.custom.js' ?>"></script>       
        <script type="text/javascript" src="<?php echo base_url() . 'js/custom/semantic-ui.custom.js' ?>"></script>       
        <style type="text/css">
            body *{
                font-family: 'Superspace';
            }
        </style>
    </head>
    <body>
        <div class="ui attached stackable menu fixed">
            <div class="ui container">
                <a class="item" href="<?=  site_url('horpak/index')?>">
                    <i class="home icon"></i> Home
                </a>
                <a class="item">
                    <i class="grid layout icon"></i> Browse
                </a>
                <a class="item">
                    <i class="mail icon"></i> Messages
                </a>
                <div class="ui simple dropdown item">
                    More
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item"><i class="edit icon"></i> Edit Profile</a>
                        <a class="item"><i class="globe icon"></i> Choose Language</a>
                        <a class="item"><i class="settings icon"></i> Account Settings</a>
                    </div>
                </div>
                <div class="right item">
                    <div class="ui input"><input placeholder="Search..." type="text"></div>
                </div>
            </div>
        </div>
        <div class="ui  container" style="margin-top: 60px;">
