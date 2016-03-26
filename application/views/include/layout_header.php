<!DOCTYPE html>
<html>
    <head>
        <title>The Materialize Example</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="<?php echo base_url() . "semantic/semantic.min.css" ?>">
        <link rel="stylesheet" href="<?php echo base_url() . "css/font-awesome.min.css" ?>">

        <link rel="stylesheet" href="<?php echo base_url() . 'plugins/jquery-confirm/css/jquery-confirm.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/datatables/dataTables.semanticui.min.css' ?>">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/horpak-style.css' ?>">


        <script type="text/javascript" src="<?php echo base_url() . "js/jquery-1.11.2.min.js" ?>"></script>           
        <script type="text/javascript" src="<?php echo base_url() . "semantic/semantic.js" ?>"></script>   
        <script type="text/javascript" src="<?php echo base_url() . "semantic/semantic.min.js" ?>"></script>   
        <script type="text/javascript" src="<?php echo base_url() . "js/validate/jquery.validate.min.js" ?>"></script>  

        <!-- Datatable-->
        <script type="text/javascript" src="<?php echo base_url() . "js/datatables/jquery.dataTables.min.js" ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . "js/datatables/dataTables.semanticui.min.js" ?>"></script>
        <!-- Datatable-->

        <script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/custom/dropdown.custom.js' ?>"></script>           
        <script type="text/javascript" src="<?php echo base_url() . 'js/custom/horpak.custom.js' ?>"></script>           
        <style type="text/css">
            body *{
                font-family: 'Superspace';
            }
        </style>
    </head>
    <body>
        <div class="ui grid">
            <div class="computer tablet only row">
                <div class="ui inverted blue fixed menu navbar page grid">
                    <a href="" class="brand item"><i class="fa fa-building fa-2x"></i> Horpak</a>
                    <a class="item" href="<?= site_url('horpak/index') ?>">
                        <i class="fa fa-home fa-2x"></i> Home
                    </a>
                    <a href="" class="item">About</a>
                    <a href="" class="item">Contact</a>
                    <a class="ui dropdown item">Dropdown
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item">Action</div>
                            <div class="item">Another action</div>
                            <div class="item">Something else here</div>
                            <div class="ui divider"></div>
                            <div class="item">Seperated link</div>
                            <div class="item">One more seperated link</div>
                        </div>
                    </a>
                    <div class="right menu">
                        <a href="" class="item">Fixed top</a>
                    </div>
                </div>
            </div>
            <div class="mobile only row">
                <div class="ui fixed inverted navbar menu">
                    <a href="" class="brand item">Project Name</a>
                    <div class="right menu open">
                        <a href="" class="menu item">
                            <i class="content icon"></i>
                        </a>
                    </div>
                </div>
                <div class="ui vertical navbar menu">
                    <a href="" class="active item">Home</a>
                    <a href="" class="item">About</a>
                    <a href="" class="item">Contact</a>
                    <div class="ui item">
                        <div class="text">Dropdown</div>
                        <div class="menu">
                            <a class="item">Action</a>
                            <a class="item">Another action</a>
                            <a class="item">Something else here</a>
                            <a class="ui aider"></a>
                            <a class="item">Seperated link</a>
                            <a class="item">One more seperated link</a>
                        </div>
                    </div>
                    <div class="menu">
                        <a href="" class="active item">Default</a>
                        <a href="" class="item">Static top</a>
                        <a href="" class="item">Fixed top</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui  container" style="margin-top: 60px;">
