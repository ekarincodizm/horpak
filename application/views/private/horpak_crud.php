<h1>Horpak Crud</h1>
<div class="row">
    <a  class="btn green accent-4 btnModalHorpakNew"  href="#modalHorpak" 
        data-id="<?= $horpak->code_id ?>">
        ข้อมูลใหม่
    </a>
</div>

<?php $this->load->view('/private/modal_horpak'); ?>
<div class="row">
    <table class="bordered table">
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
                                data-url="<?= site_url('BackendJson/deleteHorpak') ?>"
                                >ลบ
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        initClone();
        initModal();
    });
    function initClone() {
        if ($('#code').val() == '') {
            $('#btnCloning').prop('disabled', true);
        } else {
            $('#btnCloning').prop('disabled', false);
        }
        $('#btnCloning').on('click', function () {
            $('.boxProcessing').css({'display': 'block'});
            $('#code').val('');
            $('#btnSave').text('บันทึกข้อมูลจากการคัดลอก');
        });
    }
    function initModal() {
        var element = {};
        $(document).on('click', 'a', function () {
            element = this;
        })
        $('.btnModalHorpakNew,.btnModalHorpakEdit').leanModal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
            ready: function () {
                //alert('Ready');
                $.post('<?= site_url('BackendJson/getHorpak') ?>', {
                    id: $(element).attr('data-id'),
                }, function (resp) {
                    $.each(resp, function (key, value) {
                        $('#modalHorpak').find("input[name='" + key + "']").val(value);
                    });
                }, 'json');
            }, // Callback for Modal open
            complete: function () {
                //alert('Closed');
            } // Callback for Modal close
        });
    }

</script>


