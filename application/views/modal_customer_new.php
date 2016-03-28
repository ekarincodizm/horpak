<form class="ui modal custom-add form">
    <i class="close icon"></i>
    <div class="header"><i class="plus icon"></i> เพิ่มข้อมูลลูกค้า</div>
    <div class="content">
        <div class="three fields">
            <div class="field error">
                <label>ชื่อสกุล :</label>
                <input placeholder="First Name" type="text">
            </div>
            <div class="field error">
                <label>เลขที่บัตรประชาชน :</label>
                <div class="ui input focus">
                    <input placeholder="Middle Name" name="pid" type="text">
                </div>

            </div>
            <div class="field error">
                <label>วปด เกิด</label>
                <input placeholder="Last Name" type="text">
            </div>
        </div>
        <div class="field error">
            <label>ที่อยู่ :</label>
            <textarea name="" rows="4"></textarea>
        </div>
        <div class="four fields">
            <div class="field error">
                <label>จังหวัด :</label>
                <input placeholder="First Name" type="text">
            </div>
            <div class="field error">
                <label>อำเภอ :</label>
                <input placeholder="Middle Name" type="text">
            </div>
            <div class="field error">
                <label>โทรศัพท์ :</label>
                <input placeholder="Last Name" type="text">
            </div>
            <div class="field error">
                <label>อีเมลล์ :</label>
                <input placeholder="First Name" type="text">
            </div>
        </div>

        <div class="field error">
            <label>หมายเหตุ :</label>
            <textarea name="" rows="4"></textarea>
        </div>
    </div>
    <div class="ui actions center aligned segment">
        <div class="ui button green"><i class="save icon"></i> ยืนยัน</div>
        <div class="ui cancel button orange"><i class="remove icon"></i> ยกเลิก</div>
    </div>
</form>