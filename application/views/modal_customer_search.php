<div class="ui modal customer-search small">
    <i class="close icon"></i>
    <div class="header"><i class="search icon"></i> ค้นหาข้อมูลลูกค้า</div>
    <div class="content">
        <table class="ui celled table customer" id="tblCustomer">
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
                               data-address="<?= $customer['addr'] ?>">
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
        $('#tblCustomer').DataTable({
            //"dom": '<"ui grid form"<"row"<"four wide column"f><"eight wide column"><"four wide column"l>>>t<"ui grid"<"eight wide column"i><"right floated eight wide column"p>>',
            "dom": '<"ui grid form"<"row"<"eight wide column"f><"right aligned eight wide column"l>>t<"eight wide column"i><"right aligned eight wide column"p>>',
            //"dom" : '<"ui grid "<"eight wide column">>',
            "bFilter": true,
            "paging": true,
            "bLengthChange": true
        }).on('click', '.button.choose', function () {
            $('#lbName').text('นาย : ' + $(this).attr('data-name'));
            $('#lbIdCard').text('เลขบัตร : ' + $(this).attr('data-idcard'));
            $('#lbAddress').text('ที่อยู่ : ' + $(this).attr('data-address'));
            $('.ui.modal.customer-search').modal('hide');
        });
    });
</script>