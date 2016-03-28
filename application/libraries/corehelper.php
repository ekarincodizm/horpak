<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CoreHelper {

    public function getFeaturesMain() {
        return array(
            array('alias' => 'core', 'name_th' => 'ข้อมูลหลัก', 'name_en' => '', 'href' => 'horpak/subMenu/core', 'icon' => 'fa-home', 'color' => 'orange'),
            array('alias' => 'in', 'name_th' => 'แจ้งเข้า', 'name_en' => '', 'href' => 'troomopen/checkin', 'icon' => 'fa-sign-in', 'color' => 'red'),
            array('alias' => 'out', 'name_th' => 'แจ้งออก', 'name_en' => '', 'href' => 'troomopen/checkout', 'icon' => 'fa-sign-out', 'color' => 'yellow'),
            array('alias' => 'electricity_meter', 'name_th' => 'มิเตอร์ไฟ', 'name_en' => '', 'href' => '', 'icon' => 'fa-lightbulb-o', 'color' => 'olive'),
            array('alias' => 'water_meter', 'name_th' => 'มิเตอร์น้ำ', 'name_en' => '', 'href' => '', 'icon' => 'fa-tint', 'color' => 'green'),
            array('alias' => 'service', 'name_th' => 'บริการเสริม', 'name_en' => '', 'href' => '', 'icon' => 'fa-wifi', 'color' => 'teal'),
            array('alias' => 'bill_end', 'name_th' => 'บิลสิ้นเดือน', 'name_en' => '', 'href' => '', 'icon' => 'fa-calendar', 'color' => 'blue'),
            array('alias' => 'bill_manage', 'name_th' => 'จัดการบิล', 'name_en' => '', 'href' => '', 'icon' => 'fa-barcode', 'color' => 'violet'),
            array('alias' => 'receipt', 'name_th' => 'ใบเสร็จ', 'name_en' => '', 'href' => '', 'icon' => 'fa-file-text', 'color' => 'purple'),
        );
    }

    public function getFeaturesSubCore() {
        return array(
            array('alias' => 'horpak', 'name_th' => 'ข้อมูลหอพัก', 'name_en' => '', 'href' => 'horpak/horpaks', 'icon' => 'fa-building-o', 'color' => 'orange'),
            array('alias' => 'room_type', 'name_th' => 'ประเภทห้อง', 'name_en' => '', 'href' => 'mroomtype/index', 'icon' => 'fa-cutlery', 'color' => 'purple'),
            array('alias' => 'room', 'name_th' => 'ห้องพัก', 'name_en' => '', 'href' => 'mroom/index', 'icon' => 'fa-bed', 'color' => 'blue'),
            array('alias' => 'service', 'name_th' => 'บริการเสริม', 'name_en' => '', 'href' => 'mservice/index', 'icon' => 'fa-wifi', 'color' => 'violet'),
            array('alias' => 'customer', 'name_th' => 'ประวัติลูกค้า', 'name_en' => '', 'href' => '', 'icon' => 'fa-users', 'color' => 'teal'),
            array('alias' => 'setting', 'name_th' => 'ตั้งค่า', 'name_en' => '', 'href' => 'mconfig/index', 'icon' => 'fa-cog', 'color' => 'green'),
            array('alias' => 'label', 'name_th' => 'สถานะห้องพัก', 'name_en' => '', 'href' => 'mlabel/index', 'icon' => 'fa-bookmark', 'color' => 'red'),
        );
    }
    
    public function getBackendMenu() {
        return array(
            array('alias' => 'horpak', 'name_th' => 'หอพัก', 'name_en' => '', 'href' => '', 'icon' => 'fa-building-o', 'color' => 'pink lighten-4'),
            array('alias' => 'roomtype', 'name_th' => 'ประเภทห้อง', 'name_en' => '', 'href' => '', 'icon' => 'fa-bed', 'color' => 'purple accent-2'),
        );
    }

}
