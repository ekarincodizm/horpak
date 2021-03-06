<div class="ui grid">
    <div class="column">
        <div class="ui large breadcrumb">
            <a class="section" href="<?= site_url('horpak/index') ?>">หน้าแรก</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="<?= site_url('horpak/subMenu') ?>">หน้าข้อมูลหลัก</a>
            <i class="right angle icon divider"></i>
            <div class="active section">หน้าข้อมูลค่าใช้จ่ายเพิ่มเติม</div>
        </div>
    </div>    
</div>
<div class="ui grid">
    <div class="eight wide column">
        <h3>จัดการค่าใช้จ่ายเพิ่มเติม</h3>
    </div>
    <div class="eight wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="plus icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_fine'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table unstackable striped teal">
            <thead>
                <tr>
                    <th>no</th>
                    <th>horpak_id</th>
                    <th>fine_name</th>
                    <th>fine_desc</th>
                    <th>std_price</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fines as $key => $data) { ?>
                    <tr>
                        <td><?= ($key+1) ?></td>
                        <td><?= $data['horpak_id'] ?></td>
                        <td><?= $data['fine_name'] ?></td>
                        <td><?= $data['fine_desc'] ?></td>
                        <td><?= $data['std_price'] ?></td>
                        <td class="center aligned">
                            <a class="ui small  labeled icon green button btn-form" data-id="<?= $data['code_id'] ?>">
                                <i class="pencil icon"></i> แก้ไข
                            </a>
                        </td>
                        <td  class="center aligned">
                            <a class="ui small labeled icon red button btn-delete" href="javascript:void(0)" 
                               data-url="<?= site_url('mfine/deletefine/' . $data['code_id']) ?>">
                                <i class="remove icon"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



