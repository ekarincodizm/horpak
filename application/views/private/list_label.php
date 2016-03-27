<div class="ui grid">
    <div class="eight wide column">
        <h3>จัดการป้ายชื่อ</h3>
    </div>
    <div class="eight wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="plus icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_label'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table unstackable striped teal inverted">
            <thead>
                <tr>
                    <th>no</th>
                    <th>c_group</th>
                    <th>c_label</th>
                    <th>c_value</th>
                    <th>order_by</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($labels as $key => $data) { ?>
                    <tr>
                        <td><?= ($key + 1) ?></td>
                        <td><?= $data['c_group'] ?></td>
                        <td><?= $data['c_label'] ?></td>
                        <td><?= $data['c_value'] ?></td>
                        <td><?= $data['order_by'] ?></td>
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



