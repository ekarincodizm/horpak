<!DOCTYPE html>
<html>
    <head>
        <title>The Materialize Example</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/horpak-style.css' ?>">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>       
        <style type="text/css">
            body *{
                font-family: 'Superspace';
            }
        </style>
    </head>
    <body>
        <nav class="navbar-fixed">
            <div class="nav-wrapper">
                <a href="<?= site_url('horpak') ?>" class="brand-logo left">หอพักเมืองไทย</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= site_url('backend')?>">Dashboard</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">USer<i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown1" class="dropdown-content" style="width: 143px; position: absolute; top: 0px; left: 638.328px; opacity: 1; display: none;">
                            <li><a href="#!">one</a></li>
                            <li><a href="#!">two</a></li>
                            <li class="divider"></li>
                            <li><a href="#!">three</a></li>
                        </ul></li>
                </ul>
            </div>
        </nav>
        <div class="container">     