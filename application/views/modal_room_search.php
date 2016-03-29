<div class="ui modal room-search small">
    <i class="close icon"></i>
    <div class="header"><i class="search icon"></i> ค้นหาข้อมูลห้องพัก</div>
    <div class="content">
        <table class="ui sortable celled table table-modal" id="tblRoom">
            <thead>
                <tr>
                    <th>เลือก</th>
                    <th>ชื่อ สกุล</th>
                    <th>ที่อยู่</th>
                    <th>โทรศัพท์</th>
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
                               <i class="plus square outline icon"></i>
                                เลือก
                            </a>
                        </td>
                        <td><?= $room['room_no'] ?></td>
                        <td><?= $room['floor'] ?></td>
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
            $('.ui.modal.room-search').modal('hide');
        });
    });
</script>