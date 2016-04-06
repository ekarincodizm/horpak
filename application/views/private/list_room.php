<div class="ui grid">
    <div class="column">
        <div class="ui large breadcrumb">
            <a class="section" href="<?= site_url('horpak/index') ?>">หน้าแรก</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="<?= site_url('horpak/subMenu') ?>">หน้าข้อมูลหลัก</a>
            <i class="right angle icon divider"></i>
            <div class="active section">หน้าข้อมูลห้องพัก</div>
        </div>
    </div>    
</div>
<div class="ui grid">
    <div class="eight wide column">
        <h3>จัดการห้องพัก</h3>
    </div>
    <div class="eight wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="plus icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_room'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table unstackable striped teal inverted">
            <thead>
                <tr>
                    <th>no</th>
                    <th>horpak_id</th>
                    <th>type_id</th>
                    <th>room_no</th>
                    <th>floor</th>
                    <th>price</th>
                    <th>room_status</th>
                    <th>room_desc</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rooms as $key => $data) { ?>
                    <tr>
                        <td><?= ($key + 1) ?></td>
                        <td><?= $data['horpak_id'] ?></td>
                        <td><?= $data['type_id'] ?></td>
                        <td><?= $data['room_no'] ?></td>
                        <td><?= $data['floor'] ?></td>
                        <td><?= $data['price'] ?></td>
                        <td><?= $data['room_status'] ?></td>
                        <td><?= $data['room_desc'] ?></td>
                        <td class="center aligned">
                            <a class="ui small  labeled icon green button btn-form" data-id="<?= $data['code_id'] ?>">
                                <i class="pencil icon"></i> แก้ไข
                            </a>
                        </td>
                        <td class="center aligned">
                            <a class="ui small labeled icon red button btn-delete" href="javascript:void(0)" 
                               data-url="<?= site_url('mroom/deleteroom/' . $data['code_id']) ?>">
                                <i class="remove icon"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



