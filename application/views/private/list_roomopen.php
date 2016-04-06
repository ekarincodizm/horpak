<div class="ui grid">
    <div class="column">
        <div class="ui large breadcrumb">
            <a class="section" href="<?= site_url('horpak/index') ?>">หน้าแรก</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="<?= site_url('horpak/subMenu') ?>">หน้าข้อมูลหลัก</a>
            <i class="right angle icon divider"></i>
            <div class="active section">หน้าข้อมูลแจ้งเข้า</div>
        </div>
    </div>    
</div>
<div class="ui grid">
    <div class="eight wide column">
        <h3>จัดการแจ้งเข้า</h3>
    </div>
<!--    <div class="eight wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="plus icon"></i> ข้อมูลใหม่
        </a>
    </div>-->
    <?php //$this->load->view('/private/modal_config'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table unstackable striped teal">
            <thead>
                <tr>
                    <th>no</th>
                    <th>horpak_id</th>
                    <th>customer_id</th>
                    <th>room_id</th>
                    <th>rent_type_id</th>
                    <th>adv_mny</th>
                    <th>ins_mny</th>
                    <th>price</th>
                    <th>eff_date</th>
                    <th>end_date</th>
                    <th>open_status</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roomopens as $key => $data) { ?>
                    <tr>
                        <td><?= ($key+1) ?></td>
                        <td><?= $data['horpak_id'] ?></td>
                        <td><?= $data['customer_id'] ?></td>
                        <td><?= $data['room_id'] ?></td>
                        <td><?= $data['rent_type_id'] ?></td>
                        <td><?= $data['adv_mny'] ?></td>
                        <td><?= $data['ins_mny'] ?></td>
                        <td><?= $data['price'] ?></td>
                        <td><?= $data['eff_date'] ?></td>
                        <td><?= $data['end_date'] ?></td>
                        <td><?= $data['open_status'] ?></td>
                        <td class="center aligned">
                            <a class="ui small  labeled icon green button btn-form" data-id="<?= $data['code_id'] ?>">
                                <i class="pencil icon"></i> แก้ไข
                            </a>
                        </td>
                        <td  class="center aligned">
                            <a class="ui small labeled icon red button btn-delete" href="javascript:void(0)" 
                               data-url="<?= site_url('troomopen/deletetroomopen/' . $data['code_id']) ?>">
                                <i class="remove icon"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



