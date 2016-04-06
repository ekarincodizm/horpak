<div class="ui left aligned segment">
    <h2><i class="arrow right icon"></i> แจ้งเข้า</h2>
</div>
<div class="ui center aligned segment">
    <!-- Step Begin-->
    <div class="ui ordered steps">        
        <div class="active step">
            <div class="content">
                <h3 class="">กรอกข้อมูลลูกค้า</h3>
                <div class="description">เพิ่ม/ค้นหาข้อมูลลูกค้า</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <h3 class="">เลือกห้องว่าง</h3>
                <div class="description">ค้นหา/เลือกห้องว่าง</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <h3 class="">ข้อมูลการเช่า</h3>
                <div class="description">กรอกข้อมูลรายละเอียดการเช่า</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <h3 class="">สำเร็จเรียบร้อย</h3>
                <div class="description">ยืนยันการเช่า</div>
            </div>
        </div>
    </div>
    <!-- Step End-->
</div>


<div class="ui left aligned segment blocks">

    <!-- Group 1-->
    <div class="ui stackable one column grid block" style="display: block">       
        <div class="column">
            <div class="ui small orange button customer-add"><i class="plus icon"></i> เพิ่มใหม่</div>
            <div class="ui small blue button customer-search" onclick=""><i class="search icon"></i> ค้นหา</div>
        </div>
        <div class="column">
            <div class="ui stackable two column grid">
                <input type="hidden" name="customer_id" id="inputCustomerId"/>
                <div class="column"><h3 id="lbName">นาย</h3></div>
                <div class="column"><h3 id="lbIdCard">เลขบัตร</h3></div>
            </div>
        </div>
        <div class="column">
            <div class="ui stackable two column grid">
                <div class="column"><h3 id="lbAddress">ที่อยู่</h3></div>
            </div>
        </div>
        <div class="column">
            <div class="ui center aligned segment">
                <button type="button" class="ui button blue small next-step step1"  data-step="1" disabled><i class="arrow right icon"></i> ต่อไป</button>
            </div>
        </div>        
    </div>

    <!-- Group 2-->
    <div class="ui stackable one column grid block" style="display: none">       
        <h3 class="ui">
            <div class="ui icon input mini">
                <i class="search icon"></i>
                <input placeholder="Search..." type="text" id="roomSearch">
            </div>
        </h3>
        <div class="column">
            <div class="ui stackable eight column grid room-search">
                <?php foreach ($rooms as $key => $room) { ?>
                    <div class="column">
                        <div class="ui radio checkbox">
                            <input tabindex="<?= $key ?>" name="room_id" value="<?= $room['code_id'] ?>" type="radio">
                            <label><?= $room['room_no'] ?></label>
                        </div>
                    </div>
                <?php } ?>
            </div>  
        </div>
        <div class="column">
            <div class="ui center aligned segment">
                <button type="button"  class="ui button orange small prev-step"  data-step="0"><i class="arrow left icon"></i> ย้อนหลับ</button>
                <button type="button"  class="ui button blue small next-step step2" data-step="2" disabled><i class="arrow right icon"></i> ต่อไป</button>
            </div>
        </div>  
    </div>

    <!-- Group 3-->
    <form class="ui stackable one column grid block error" style="display: none" name="formReserve">     
        <div class="column">
            <div class="ui form" >
                <div class="two fields">
                    <div class="field">
                        <label>วันที่เริ่ม</label>
                        <input placeholder="วัน-เดือน-ปี" type="text" name="eff_date" required>
                    </div>
                    <div class="field">
                        <label>ประเภท</label>
                        <div class="ui radio checkbox">
                            <input checked="checked" type="radio" name="rent_type_id" value="1" required>
                            <label>รายวัน</label>
                        </div>
                        <div class="ui radio checkbox">
                            <input checked="checked" type="radio" name="rent_type_id" value="2" required>
                            <label>รายเดือน</label>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>เงินมัดจำ</label>
                        <input type="number" placeholder="เงินมัดจำ" name="adv_mny" required>
                    </div>
                    <div class="field">
                        <label>เงินประกัน</label>
                        <input type="number" placeholder="เงินประกัน" name="ins_mny" required>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>ราคาต่อหน่วย</label>
                        <input type="number" placeholder="ราคาต่อหน่วย" name="price" required>
                    </div>
                    <div class="field">
                        <label>สถานะ</label>
                        <?php foreach ($labels as $key => $label) { ?>
                            <div class="ui radio checkbox">
                                <input type="radio" name="open_status" checked="checked" value="<?= $label['c_value'] ?>" required>
                                <label><?= $label['c_label'] ?></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="ui center aligned segment">
                <button type="button"  class="ui button orange small prev-step"  data-step="1"><i class="arrow left icon"></i> ย้อนหลับ</button>
                <button type="submit"  class="ui button blue small stepBlank"><i class="arrow right icon"></i> ต่อไป</button>
                <button type="button"  class="ui button blue small next-step step3"  data-step="3" style="display: none"><i class="arrow right icon"></i> ต่อไป</button>
            </div>
        </div>
    </form>


    <!-- Group 4-->
    <div class="ui stackable one column grid block" style="display: none">     
        <div class="column">
            <div class="ui checkbox">
                <input name="example" type="checkbox">
                <label>ยืนยันการเช่าหอพัก</label>
            </div>
        </div>
        <div class="column">
            <div class="ui center aligned segment">
                <button type="button"  class="ui button orange small prev-step"  data-step="2"><i class="arrow left icon"></i> ย้อนหลับ</button>
                <button type="button"  class="ui button green" id="btnSaveCheckIn">บันทึก</button>                
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    $.validator.addMethod("dateFormat", function (value, element) {
        return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/.test(value);
    }, "Please enter a date in the format dd-mm-yyyy.");
    $(document).ready(function () {
        step3Reserve();
        roomSearch();
        $('.ui.button.customer-search').on('click', function () {
            $('.ui.modal.customer-search').modal('show');
        });
        $('.ui.button.customer-add').on('click', function () {
            $('.ui.modal.customer-add').modal('show');
        });
        $('.room-search').on('click', 'input[type=radio]', function () {
            $('.step2').attr('disabled', false);
        });
//        $('input[name="eff_date"]').daterangepicker({
//            singleDatePicker: true,
//            format: 'MM/DD/YYYY'
//        });
    });
    function roomSearch() {
        $('#roomSearch').keyup(function () {
            var searchVal = $(this).val();
            console.log('search value ::==' + searchVal);
            var rooms = $('.room-search').find('input[type="radio"]');
            $.each(rooms, function (index, room) {
                var roomName = $(this).next('label').text();
                var selectorVisible = $(this).parent().parent();
                if (roomName.indexOf(searchVal) > -1) {
                    $(selectorVisible).show();
                } else {
                    $(selectorVisible).hide();
                }
            });
        });
    }
    function step3Reserve() {
        $('form[name="formReserve"]').submit(function (e) {
            e.preventDefault();
        }).validate({
            rules: {
                eff_date: {
                    dateFormat: true
                }
            },
            message: {
                eff_date: {
                    dateFormat: 'วัน-เดือน-ปี'
                }
            },
            submitHandler: function (form) {
                $('.stepBlank').hide();
                //$('.step3').show();
                $('.step3').trigger('click');
            }
        });
        $('#btnSaveCheckIn').on('click', function () {
            saveCheckIn();
        });
    }
    function saveCheckIn() {
        var dataCheckIn = {};
        dataCheckIn.code_id = '';
        //dataCheckIn.horpak_id = '';
        dataCheckIn.customer_id = $('input[name="customer_id"]').val();
        dataCheckIn.room_id = $('input[name="room_id"]').val();
        dataCheckIn.adv_mny = $('input[name="adv_mny"]').val();
        dataCheckIn.rent_type_id = $('input[name="rent_type_id"]').val();
        dataCheckIn.ins_mny = $('input[name="ins_mny"]').val();
        dataCheckIn.price = $('input[name="price"]').val();
        dataCheckIn.eff_date = $('input[name="eff_date"]').val();
        dataCheckIn.end_date = '';
        dataCheckIn.open_status = $('input[name="open_status"]').val();
        dataCheckIn.remark = '';
        dataCheckIn.create_by = '';
        dataCheckIn.create_date = $('input[name="create_date"]').val();
        $.confirm({
            icon: 'fa fa-warning',
            title: 'ท่านกำลังจะลงทะเบียนเข้าหอ',
            content: 'ยืนยันการลงทะเบียนเข้าหอ!',
            confirmButton: 'ใช่ ฉันยืนยัน',
            cancelButton: 'ไม่ใช่ ฉันกดผิด',
            confirmButtonClass: 'ui button green',
            cancelButtonClass: 'ui button red',
            columnClass: 'ui grid center aligned',
            closeIcon: true,
            closeIconClass: 'fa fa-close', // or 'glyphicon glyphicon-remove'
            confirm: function () {
                $.ajax({
                    url: '<?= site_url('troomopen/savecheckin') ?>',
                    data: dataCheckIn,
                    dataType: 'json',
                    type: 'post',
                    success: function (resp) {
                        if (resp.status) {
                            formMessageInfo(resp);
                        } else {
                            toastMessageError(resp);
                        }
                    },
                    error: function (err, xhrr, http) {
                        console.log(err);
                        toastMessageError({title: 'StatusCode : ' + err.status + ' ' + err.statusText, message: err.responseText});
                    }
                });
            },
        });
    }
</script>