<form class="ui form horpak segment error validate customer-add modal"
      action="<?= site_url('pcustomer/savecustomer') ?>" method="post">
    <i class="close icon"></i>
    <div class="header"><i class="plus icon"></i> เพิ่มข้อมูลลูกค้า</div>
    <div class="content">
        <div class="two fields">
            <div class="field error">
                <label>ชื่อสกุล :</label>
                <input type="hidden" name="code_id">
                <input placeholder="ชื่อจริง" type="text" name="fname" required>
            </div>
            <div class="field error">
                <label>สกุล :</label>
                <input placeholder="นามสกุล" type="text" name="lname" required>
            </div>
        </div>
        <div class="two fields">
            <div class="field error">
                <label>เลขที่บัตรประชาชน :</label>
                <div class="ui input">
                    <input placeholder="13 หลัก" type="text" name="id_card" maxlength="13" required>
                </div>
            </div>
            <div class="field error">
                <label>วปด เกิด</label>
                <input placeholder="วัน-เดือน-ปี" type="text" name="birth_day" maxlength="10">
            </div>
        </div>
        <div class="field error">
            <label>ที่อยู่ :</label>
            <textarea name="addr" rows="4"></textarea>
        </div>
        <div class="four fields">
            <div class="field">
                <label>เลือกจังหวัด</label>
                <select class="ui dropdown search selection" name="province">
                    <option value="">Province</option>
                    <?php foreach ($provinces as $index => $province) { ?>
                        <option value="<?= $province['province_id'] ?>"><?= $province['province_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="field">
                <label>เลือกอำเภอ</label>
                <select class="ui dropdown" name="state" aria-required="true" data-url='<?= site_url('address/getAmphur') ?>'></select>
                <input type="hidden" name="state"/>
            </div>
            <div class="field error">
                <label>รหัสไปรษณีย์ :</label>
                <input placeholder="5 หลัก" type="text" name="zipcode" maxlength="5">
            </div>
        </div>
        <div class="four fields">
            <div class="field error">
                <label>โทรศัพท์ :</label>
                <input placeholder="10 หลัก" type="text" name="mobile" maxlength="10" required>
            </div>
            <div class="field error">
                <label>อีเมลล์ :</label>
                <input placeholder="xxx@xxx.com" type="text" name="email">
            </div>
        </div>
        <div class="field error">
            <label>หมายเหตุ :</label>
            <textarea name="" rows="4"></textarea>
        </div>
    </div>
    <div class="ui actions center aligned segment">
        <button type="submit" class="ui button green"><i class="save icon"></i> ยืนยัน</button>
        <div class="ui cancel button orange"><i class="remove icon"></i> ยกเลิก</div>
    </div>
</form>