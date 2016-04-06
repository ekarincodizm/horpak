<div class="ui modal room-search small">
    <i class="close icon"></i>
    <div class="header"><i class="search icon"></i> ค้นหาข้อมูลห้องพัก</div>
    <div class="content">
        <table class="ui sortable celled table table-modal" id="tblRoom">
            <thead>
                <tr>
                    <th>เลือก</th>
                     <th>ชื่อ สกุล</th>
                    <th>เลขห้อง</th>
                    <th>ราคา</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rooms as $key => $room) { ?>
                    <tr>
                        <td>
                            <a class="ui button green choose" 
                               data-no="<?= $room['room_no'] ?>"
                               data-floor="<?= $room['floor'] ?>"
                               data-price="<?= $room['price'] ?>"
                               data-customerid="<?= $room['customer_id'] ?>"
                               data-roomid="<?= $room['code_id'] ?>"
                               data-horpakid="<?= $room['horpak_id'] ?>"
                               data-name="<?= $room['fname'] . '   ' . $room['lname'] ?>"
                               data-address="<?= $room['address'] ?>"
                               data-idcard="<?= $room['id_card'] ?>"
                               >
                                <i class="plus square outline icon"></i>
                                เลือก
                            </a>
                        </td>
                        <td><?= $room['fname'] . '   ' . $room['lname'] ?></td>
                        <td><?= $room['room_no'] ?></td> 
                        <td><?= $room['price'] ?></td>
                    <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="actions">
        <div class="ui cancel button green"><i class="remove icon"></i> ปิด</div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tblRoom').on('click', '.button.choose', function () {
            $('#lbNo').text('ชื่อห้อง : ' + $(this).attr('data-no'));
            $('#lbFloor').text('ชั้น : ' + $(this).attr('data-floor'));
            $('#lbPrice').text('ราคา : ' + $(this).attr('data-price'));
            $('#lbName').text('ชื่อ : ' + $(this).attr('data-name'));
            $('#lbIdCard').text('เลขบัตร : ' + $(this).attr('data-idcard'));
            $('#lbAddress').text('ที่อยู่ : ' + $(this).attr('data-address'));
            $('#inputHorpakId').val($(this).attr('data-horpakid'));
            $('#inputOpenId').val($(this).attr('data-roomid'));
            $('#inputCustomerId').val($(this).attr('data-customerid'));
            $('.step0').attr('disabled', false);
            $('.ui.modal.room-search').modal('hide');
        });
    });
</script>