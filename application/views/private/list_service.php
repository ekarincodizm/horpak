<div class="ui grid">
    <div class="column">
        <div class="ui large breadcrumb">
            <a class="section" href="<?= site_url('horpak/index') ?>">หน้าแรก</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="<?= site_url('horpak/subMenu') ?>">หน้าข้อมูลหลัก</a>
            <i class="right angle icon divider"></i>
            <div class="active section">หน้าข้อมูลบริการเสริม</div>
        </div>
    </div>    
</div>
<div class="ui grid">
    <div class="eight wide column">
        <h3>จัดการบริการ</h3>
    </div>
    <div class="eight wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="plus icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_service'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table unstackable striped teal inverted">
            <thead>
                <tr>
                    <th>no</th>
                    <th>horpak_id</th>
                    <th>service_name</th>
                    <th>sercice_desc</th>
                    <th>price</th>
                    <th>service_status</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($services as $key => $data) { ?>
                    <tr>
                        <td><?= ($key + 1) ?></td>
                        <td><?= $data['name_th'] ?></td>
                        <td><?= $data['service_name'] ?></td>
                        <td><?= $data['sercice_desc'] ?></td>
                        <td><?= $data['price'] ?></td>
                        <td><?= $data['c_label'] ?></td>
                        <td class="center aligned">
                            <a class="ui small  labeled icon green button btn-form" data-id="<?= $data['code_id'] ?>">
                                <i class="pencil icon"></i> แก้ไข
                            </a>
                        </td>
                        <td class="center aligned">
                            <a class="ui small labeled icon red button btn-delete" href="javascript:void(0)" 
                               data-url="<?= site_url('mlabel/deletelabel/' . $data['code_id']) ?>">
                                <i class="remove icon"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



