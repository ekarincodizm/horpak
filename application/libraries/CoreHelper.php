<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CoreHelper {

    public function getFeaturesMain() {
        return array(
            array('alias' => 'core', 'name_th' => 'ข้อมูลหลัก', 'name_en' => '', 'href' => '', 'icon' => 'store', 'color' => 'pink lighten-4'),
            array('alias' => 'in', 'name_th' => 'แจ้งเข้า', 'name_en' => '', 'href' => '', 'icon' => 'input', 'color' => 'purple accent-2'),
            array('alias' => 'out', 'name_th' => 'แจ้งออก', 'name_en' => '', 'href' => '', 'icon' => 'open_in_new', 'color' => 'blue lighten-4'),
            array('alias' => 'electricity_meter', 'name_th' => 'มิเตอร์ไฟ', 'name_en' => '', 'href' => '', 'icon' => 'view_array', 'color' => 'light-blue lighten-3'),
            array('alias' => 'water_meter', 'name_th' => 'มิเตอร์น้ำ', 'name_en' => '', 'href' => '', 'icon' => 'invert_colors', 'color' => 'teal accent-3'),
            array('alias' => 'service', 'name_th' => 'บริการเสริม', 'name_en' => '', 'href' => '', 'icon' => 'info_outline', 'color' => 'lime lighten-3'),
            array('alias' => 'bill_end', 'name_th' => 'บิลสิ้นเดือน', 'name_en' => '', 'href' => '', 'icon' => 'picture_in_picture', 'color' => 'lime accent-3'),
            array('alias' => 'bill_manage', 'name_th' => 'จัดการบิล', 'name_en' => '', 'href' => '', 'icon' => 'subtitles', 'color' => 'amber lighten-2'),
            array('alias' => 'receipt', 'name_th' => 'ใบเสร็จ', 'name_en' => '', 'href' => '', 'icon' => 'receipt', 'color' => 'deep-orange lighten-2'),
        );
    }

    public function getFeaturesSubCore() {
        return array(
            array('alias' => 'horpak', 'name_th' => 'ข้อมูลหอพัก', 'name_en' => '', 'href' => '', 'icon' => 'business', 'color' => 'pink lighten-4'),
            array('alias' => 'room_type', 'name_th' => 'ประเภทห้อง', 'name_en' => '', 'href' => '', 'icon' => 'tab', 'color' => 'purple accent-2'),
            array('alias' => 'room', 'name_th' => 'ห้องพัก', 'name_en' => '', 'href' => '', 'icon' => 'assignment', 'color' => 'blue lighten-4'),
            array('alias' => 'service', 'name_th' => 'บริการเสริม', 'name_en' => '', 'href' => '', 'icon' => 'forum', 'color' => 'light-blue lighten-3'),
            array('alias' => 'customer', 'name_th' => 'ประวัติลูกค้า', 'name_en' => '', 'href' => '', 'icon' => 'person_pin', 'color' => 'teal accent-3'),
            array('alias' => 'setting', 'name_th' => 'ตั้งค่า', 'name_en' => '', 'href' => '', 'icon' => 'settings', 'color' => 'lime lighten-3'),
        );
    }
    
    public function getBackendMenu() {
        return array(
            array('alias' => 'horpak', 'name_th' => 'หอพัก', 'name_en' => '', 'href' => '', 'icon' => 'business', 'color' => 'pink lighten-4'),
            array('alias' => 'roomtype', 'name_th' => 'ประเภทห้อง', 'name_en' => '', 'href' => '', 'icon' => 'tab', 'color' => 'purple accent-2'),
        );
    }

}
