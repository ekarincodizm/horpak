<?php

class TRoomopen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('corehelper');
        $this->load->library('session');
        $this->load->library('functionhelper');
    }

    public function index() {
        $this->load->model('troomopen_model');
        $data['roomopens'] = $this->troomopen_model->getDataAll();

        $this->load->view('/include/layout_header');
        $this->load->view('/private/list_roomopen', $data);
        $this->load->view('/include/layout_footer');
    }

    public function checkin() {
        $this->load->model('mroom_model');
        $data['rooms'] = $this->mroom_model->getDataAll();

        $this->load->model('pcustomer_model');
        $data['customers'] = $this->pcustomer_model->getDataAll();

        $this->load->model('mlabel_model');
        $data['labels'] = $this->mlabel_model->getDataAllByGroup('ROOM_STATUS');

        $this->load->view('/include/layout_header');
        $this->load->view('/room_checkin', $data);
        $this->load->view('/modal_customer_search', $data);
        $this->load->model('province_model');
        $data['provinces'] = $this->province_model->getDataAll();
        $this->load->view('/modal_customer_add', $data);
        $this->load->view('/include/layout_footer');
    }

    public function checkout() {
        $this->load->model('troomopen_model');
        $data['rooms'] = $this->troomopen_model->getDataAllRoomCheckIn();

        $this->load->model('pcustomer_model');
        $data['customers'] = $this->pcustomer_model->getDataAll();

        $this->load->model('mfine_model');
        $data['fines'] = $this->mfine_model->getDataAll();

        $this->load->view('/include/layout_header');
        $this->load->view('/room_checkout', $data);
        $this->load->view('/include/layout_footer');

        $this->load->view('/modal_room_search', $data);
        $this->load->view('/modal_customer_search', $data);
    }

    public function saveCheckIn() {
        $this->functionhelper->jsonHeader();
        $exec = false;
        if (!empty($_POST)) {
            $this->load->model('troomopen_model');
            $_POST['horpak_id'] = $this->session->userdata('horpak_id');
            $_POST['create_date'] = date('Y-m-d');
            //$_POST['eff_date'] = date_format($_POST['eff_date'], 'Y-m-d');
            $_POST['eff_date'] = date("Y-m-d", strtotime($_POST['eff_date']));
            $this->troomopen_model->setData($_POST);
            if (empty($_POST['code_id'])) {
                $exec = $this->troomopen_model->insertData();
            } else {
                $exec = $this->troomopen_model->updateData();
            }
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารถบันทึกข้อมูลได้', site_url('horpak/index'));
        }
    }

    public function saveCheckOut() {
        $roomStatus = 2;
        $exec = false;
        $fines = json_decode($_POST['jsonFines'], true);
        $horpakId = $_POST['horpakId'];
        $openId = $_POST['openId'];
        //var_dump($fines);
        $this->load->model('tfine_model');

        foreach ($fines as $index => $fine) {
            $this->tfine_model->setData(array(
                'code_id' => '',
                'horpak_id' => $horpakId,
                'open_id' => $openId,
                'fine_id' => $fine['id'],
                'price' => $fine['price']
            ));
            $exec = $this->tfine_model->insertData();
        }
        $this->load->model('troomopen_model');
        $exec = $this->troomopen_model->updateStatus($roomStatus, $openId);

        $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('horpak/index'));
    }

    public function deleteTRoomopen($codeId) {
        $this->functionhelper->jsonHeader();
        if (!empty($codeId)) {
            $this->load->model('troomopen_model');
            $exec = $this->troomopen_model->deleteData($codeId);
            $this->functionhelper->jsonResponseFull($exec, 'เกิดข้อผิดพลาด', 'ไม่สามารลบข้อมูลได้', site_url('troomopen/index'));
        }
    }

}
