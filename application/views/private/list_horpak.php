<div class="ui grid">
    <div class="sixteen wide column">
        <a class="ui right floated small primary labeled icon button btn-new"

           data-id="<?= $horpak->code_id ?>">
            <i class="user icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_horpak'); ?>
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
                <?php foreach ($horpaks as $key => $data) { ?>
                    <tr>
                        <td><?= $data['code_id'] ?></td>
                        <td><?= $data['name_th'] ?></td>
                        <td><?= $data['addr_th'] ?></td>
                        <td><?= $data['phone'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['contact'] ?></td>
                        <td><?= $data['join_date'] ?></td>
                        <td>
                            <a href="#modalHorpak" 
                               class="btn light-blue lighten-2 btnModalHorpakEdit"
                               data-id="<?= $data['code_id'] ?>">
                                แก้ไขข้อมูล
                            </a>
                        </td>
                        <td>
                            <button class="btn confirm red accent-2"
                                    data-id="<?= $data['code_id'] ?>"
                                    data-url="<?= site_url('backendjson/deletehorpak') ?>"
                                    >ลบ
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('.btn-new').on('click', function (value) {
            var element = this;
            $('.ui.modal')
                    .modal({
                        closable: false,
                        onDeny: function () {
                            window.alert('Wait not yet!');
                            return false;
                        },
                        onApprove: function () {
                            window.alert('Approved!');
                        }
                    })
                    .modal('show');
        });
    });
//    $.post('<?= site_url('BackendJson/getHorpak') ?>', {
//        id: $(element).attr('data-id'),
//    }, function (resp) {
//        $.each(resp, function (key, value) {
//            $('#modalHorpak').find("input[name='" + key + "']").val(value);
//        });
//    }, 'json');

</script>


