<div class="ui grid">
    <div class="sixteen wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="user icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_config'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table">
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
                        <td>
                            <a class="ui small green button btn-form" data-id="<?= $data['code_id'] ?>">
                                <i class="pencil icon"></i> แก้ไขข้อมูล
                            </a>
                        </td>
                        <td>
                            <a class="ui small red button btn-delete" href="javascript:void(0)" 
                               onclick="deleteConfig('<?= site_url('Backend/DeleteConfig/' . $data['code_id']) ?>')">
                                <i class="remove icon"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('.btn-form').on('click', function (value) {
            var element = this;
            var id = $(element).attr('data-id');
            var url = $('.ui.form').attr('data-url');
            console.log('id ::=='+id);
            console.log('url ::=='+url);
            if (url === undefined) {
                alert('ใส่  attribute data-url ใน form ระบุ url ที่ไป get data ด้วย');
                return;
            } else {
                if (id !== undefined) {
                    $.get(url, {id: id}, function (resp) {
                        $.each(resp, function (key, value) {
                            $('.ui.form').find("input[name='" + key + "']").val(value);
                        });
                    }, 'json');
                } else {
                    //alert('แน่ใจว่าใส่  attribute data-id คือ id ที่จะลบ ใน ปุ่มคลิกลบแล้วใช่ไหม');
                    $('.ui.form').find("input[type=text], textarea").val("");
                }
            }

            $('.ui.modal').modal({
                closable: false,
                onDeny: function () {
                    return false;
                },
                onApprove: function () {
                    //this.modal('hide');
                }
            }).modal('show');
        });
    });
</script>


