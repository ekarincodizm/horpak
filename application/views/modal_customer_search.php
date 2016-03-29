<div class="ui modal customer-search small">
    <i class="close icon"></i>
    <div class="header"><i class="search icon"></i> ค้นหาข้อมูลลูกค้า</div>
    <div class="content">
        <table class="ui celled table customer table-modal" id="tblCustomer">
            <thead>
                <tr>
                    <th>เลือก</th>
                    <th>ชื่อ สกุล</th>
                    <th>ที่อยู่</th>
                    <th>โทรศัพท์</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $key => $customer) { ?>
                    <tr>
                        <td>
                            <a class="ui button green choose" 
                               data-name="<?= $customer['fname'] . '     ' . $customer['lname'] ?>"
                               data-idcard="<?= $customer['id_card'] ?>"
                               data-address="<?= $customer['addr'] ?>"
                               data-id="<?= $customer['code_id'] ?>">
                                <i class="plus square outline icon"></i>
                                เลือก
                            </a>
                        </td>
                        <td><?= $customer['fname'] . '     ' . $customer['lname'] ?></td>
                        <td><?= $customer['addr'] ?></td>
                        <td><?= $customer['mobile'] ?></td>
                    </tr>
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
        $('#tblCustomer').on('click', '.button.choose', function () {
            $('#inputCustomerId').val($(this).attr('data-id'));
            $('#lbName').text('นาย : ' + $(this).attr('data-name'));
            $('#lbIdCard').text('เลขบัตร : ' + $(this).attr('data-idcard'));
            $('#lbAddress').text('ที่อยู่ : ' + $(this).attr('data-address'));
            $('.step1').attr('disabled', false);
            $('.ui.modal.customer-search').modal('hide');
        });
    });
</script>