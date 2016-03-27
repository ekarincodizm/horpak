<div class="ui grid">
    <div class="eight wide column">
        <h3>จัดการตั้งค่าหอพัก</h3>
    </div>
    <div class="eight wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="plus icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_config'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table unstackable striped teal inverted">
            <thead>
                <tr>
                    <th>code_id</th>
                    <th>name_th</th>
                    <th>addr_th</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>contact</th>
                    <th>join_date</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($configs as $key => $data) { ?>
                    <tr>
                        <td><?= $data['code_id'] ?></td>
                        <td><?= $data['horpak_id'] ?></td>
                        <td><?= $data['tax_rate'] ?></td>
                        <td><?= $data['elec_rate'] ?></td>
                        <td><?= $data['water_rate'] ?></td>
                        <td><?= $data['last_update'] ?></td>
                        <td><?= $data['update_by'] ?></td>
                        <td class="center aligned">
                            <a class="ui small  labeled icon green button btn-form" data-id="<?= $data['code_id'] ?>">
                                <i class="pencil icon"></i> แก้ไข
                            </a>
                        </td>
                        <td  class="center aligned">
                            <a class="ui small labeled icon red button btn-delete" href="javascript:void(0)" 
                               data-url="<?= site_url('mconfig/deleteconfig/' . $data['code_id']) ?>">
                                <i class="remove icon"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



