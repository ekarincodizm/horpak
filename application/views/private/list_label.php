<div class="ui grid">
    <div class="sixteen wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="user icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_label'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table">
            <thead>
                <tr>
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
                        <td><?= $data['c_group'] ?></td>
                        <td><?= $data['c_label'] ?></td>
                        <td><?= $data['c_value'] ?></td>
                        <td><?= $data['order_by'] ?></td>
                        <td>
                            <a class="ui small green button btn-form" 
                               data-id="<?= $data['c_group'] ?>">
                                <i class="pencil icon"></i> แก้ไขข้อมูล
                            </a>
                        </td>
                        <td>
                            <a class="ui small red button btn-delete" href="javascript:void(0)" 
                               data-url="<?= site_url('Backend/DeleteLabel/' . $data['c_group']) ?>">
                                <i class="remove icon"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



