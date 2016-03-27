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

<!--        <script type="text/javascript" src="<?php echo base_url() . 'js/validate-form.js' ?>"></script>-->
        
        <script type="text/javascript" src="<?php echo base_url() . 'plugins/jquery-confirm/js/jquery-confirm.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/custom/dropdown.custom.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/custom/modal.custom.js' ?>"></script>
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
                <div class="ui inverted fixed menu navbar page grid blue stackable">
                    <div class="item">
                        <i class="fa fa-building fa-2x"></i>
                    </div>
                    <a href="<?= site_url('horpak/index') ?>" class="brand item">หอพักออนไลน์</a>
<!--                    <div class="ui dropdown item">
                        <i class="large protect icon"></i> จัดารข้อมูลฟิ้นฐาน <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item" href="<?= site_url('mconfig/index') ?>"><i class="fa fa-cog"></i> ตั้งค่าระบบหอพัก</a>
                            <a class="item" href="<?= site_url('mlabel/index') ?>"><i class="fa fa-book"></i> จัดการป้ายชื่อ</a>
                            <a class="item" href="<?= site_url('mroom/index') ?>"><i class="fa fa-cutlery"></i> จัดการห้องพัก</a>
                            <a class="item" href="<?= site_url('mroomtype/index') ?>"><i class="fa fa-reorder"></i> จัดการประเภทห้องพัก</a>
                            <a class="item" href="<?= site_url('mservice/index') ?>"><i class="fa fa-truck"></i> จัดการการบริการ</a>
                        </div>
                    </div>
                    <div class="ui dropdown item">
                        <i class="large protect icon"></i> จัดารข้อมูลหอพัก <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item" href="<?= site_url('horpak/horpaks') ?>"><i class="fa fa-cog"></i> ข้อมูลหอพัก</a>
                        </div>
                    </div>-->
                    <div class="right menu">
                        <a href="<?= site_url('horpak/register') ?>" class="brand item"><i class="fa fa-registered"></i> ลงทะเบียนหอพัก</a>
                        <a href="" class="item">
                            <i class="fa fa-user"> </i> 
                            ข้อมูลผู้ใช้งาน
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile only row">
                <div class="ui fixed inverted navbar menu blue">
                    <div class="left menu open">
                        <a href="" class="menu item">
                            <i class="content icon"></i>
                        </a>
                    </div>
                    <a href="" class="brand item">จัดการห้องพัก</a>
                </div>
                <!--                <div class="ui vertical navbar menu">
                                    <a href="" class="active item">Home</a>
                                    <a href="<?= site_url('horpak/index') ?>" class="brand item">จัดการห้องพัก</a>
                                    <div class="ui dropdown item">
                                        <i class="large protect icon"></i> จัดารข้อมูลฟิ้นฐาน <i class="dropdown icon"></i>
                                        <div class="menu">
                                            <a class="item" href="<?= site_url('mconfig/index') ?>"><i class="fa fa-cog"></i> ตั้งค่าระบบหอพัก</a>
                                            <a class="item" href="<?= site_url('mlabel/index') ?>"><i class="fa fa-book"></i> จัดการป้ายชื่อ</a>
                                            <a class="item" href="<?= site_url('mroom/index') ?>"><i class="fa fa-cutlery"></i> จัดการห้องพัก</a>
                                            <a class="item" href="<?= site_url('mroomtype/index') ?>"><i class="fa fa-reorder"></i> จัดการประเภทห้องพัก</a>
                                            <a class="item" href="<?= site_url('mservice/index') ?>"><i class="fa fa-truck"></i> จัดการการบริการ</a>
                                        </div>
                                    </div>
                                    <div class="menu">
                                        <a href="" class="active item">Default</a>
                                        <a href="" class="item">Static top</a>
                                        <a href="" class="item">Fixed top</a>
                                    </div>
                                </div>-->                
            </div>
        </div>
        <div class="ui left demo vertical inverted sidebar labeled icon menu">
            <a class="item">
                <i class="home icon"></i>
                Home
            </a>
            <a class="item">
                <i class="block layout icon"></i>
                Topics
            </a>
            <a class="item">
                <i class="smile icon"></i>
                Friends
            </a>
        </div>

        <div class="ui  container pusher" style="margin-top: 60px;">
