<div class="ui center aligned segment">
    <!-- Step Begin-->
    <div class="ui ordered steps">
        <div class="active step">
            <div class="content">
                <h3 class="">แจ้งเข้า</h3>
                <div class="description">ค้นหา/เลือกห้องว่าง</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <h3 class="">กรอกข้อมูลลูกค้า</h3>
                <div class="description">เพิ่ม/ค้นหาข้อมูลลูกค้า</div>
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
    <div class="ui stackable one column grid block" style="display: inline">       
        <div class="column">
            <h3 class="ui  floated header">
                เลือกห่้องว่าง
            </h3>
            <h3 class="ui right floated header">
                <div class="ui icon input small">
                    <i class="search icon"></i>
                    <input placeholder="Search..." type="text">
                </div>
            </h3>
        </div>
        <div class="column">
            <div class="ui stackable eight column grid">
                <?php foreach ($rooms as $key => $room) { ?>
                    <div class="column">
                        <div class="ui radio checkbox">
                            <input tabindex="<?= $key ?>" name="<?= $room['code_id'] ?>" type="radio">
                            <label><?= $room['room_no'] ?></label>
                        </div>
                    </div>
                <?php } ?>
            </div>  
        </div>
    </div>

    <!-- Group 2-->
    <div class="ui stackable one column grid block" style="display: none">       
        <div class="column">
            <div class="ui tiny orange button customer-add"><i class="plus icon"></i> เพิ่มใหม่</div>
            <div class="ui tiny blue button search customer-search" onclick=""><i class="search icon"></i> ค้นหา</div>
        </div>
        <div class="column">
            <div class="ui stackable two column grid">
                <div class="column"><h3 id="lbName">นาย</h3></div>
                <div class="column"><h3 id="lbIdCard">เลขบัตร</h3></div>
            </div>
        </div>
        <div class="column">
            <div class="ui stackable two column grid">
                <div class="column"><h3 id="lbAddress">ที่อยู่</h3></div>
            </div>
        </div>
    </div>

    <!-- Group 3-->
    <div class="ui stackable one column grid block" style="display: none">     
        <div class="column">
            <div class="ui form">
                <div class="two fields">
                    <div class="field">
                        <label>วันที่เริ่ม</label>
                        <input placeholder="Middle Name" type="text">
                    </div>
                    <div class="field">
                        <label>ประเภท</label>
                        <div class="ui radio checkbox">
                            <input name="type" checked="checked" type="radio" value="day">
                            <label>รายวัน</label>
                        </div>
                        <div class="ui radio checkbox">
                            <input name="type" checked="checked" type="radio" value="month">
                            <label>รายเดือน</label>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>เงินมัดจำ</label>
                        <div class="ui right labeled input">
                            <input placeholder="Enter weight.." type="text">
                            <div class="ui basic label">
                                บาท
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>เงินประกัน</label>
                        <div class="ui right labeled input">
                            <input placeholder="Enter weight.." type="text">
                            <div class="ui basic label">
                                บาท
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>ราคาต่อหน่วย</label>
                        <div class="ui right labeled input">
                            <input placeholder="Enter weight.." type="text">
                            <div class="ui basic label">
                                บาท
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>สถานะ</label>
                        <div class="ui radio checkbox">
                            <input name="status" checked="checked" type="radio" value="reserve">
                            <label>จอง</label>
                        </div>
                        <div class="ui radio checkbox">
                            <input name="status" checked="checked" type="radio" value="confirm">
                            <label>เข้าอยู่</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                <button class="ui button blue">บันทึก</button>
                <button class="ui button orange">ยกเลิก</button>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ui.button.customer-search').on('click', function () {
            $('.ui.modal.customer-search').modal('show');
        });
        $('.ui.button.customer-add').on('click', function () {
            $('.ui.modal.customer-add').modal('show');
        });
    });
</script>