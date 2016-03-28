<form class="ui form horpak segment error validate" id="form-config"
      action="<?= site_url('horpak/register_horpak') ?>" method="post">        
    <div class="header">
        <h2>ลงทะเบียนหอพัก</h2>            
    </div>
    <div class="two fields">
        <div class="field">
            <label>User Name (ชื่อสำหรับเข้าใช้งานระบบ)</label>            
            <input type="text" name="user_name" required>
        </div>
        <div class="field">
            <label>Password (รหัสผ่าน)</label>
            <input type="text" name="user_pass" required>
        </div>
    </div>
    
    <div class="two fields">
        <div class="field">
            <label>ชื่อหอพักภาษาไทย</label>
            <input type="hidden" name="code_id" required>
            <input type="text" name="name_th" required>
        </div>
        <div class="field">
            <label>ชื่อหอพักภาษาไทย</label>
            <input type="text" name="name_en" required>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>ที่อยู่ภาษาไทย</label>
            <textarea name="addr_th" rows="3" required></textarea>
        </div>
        <div class="field">
            <label>ที่อยู่ภาษาอังกฤษ</label>
            <textarea name="addr_en" rows="3" required></textarea>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>เลือกจังหวัด</label>
            <select class="ui dropdown search selection" name="province" required>
                <option value="">Province</option>
                <?php foreach ($provinces as $index => $province) { ?>
                    <option value="<?= $province['province_id'] ?>"><?= $province['province_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="field">
            <label>เลือกอำเภอ</label>
            <select class="ui dropdown" required name="state" aria-required="true" data-url='<?= site_url('address/getAmphur') ?>'></select>
            <input type="hidden" name="state"/>
        </div>
    </div>   
    <div class="four fields">
        <div class="field">
            <label>รหัสไปรษณีย์</label>
            <input type="text" name="zipcode" required data-url='<?= site_url('address/getZipcode') ?>'>
        </div>    
		<div class="field">
            <label> ชื่อผู้ติดต่อ</label>
            <input type="text" name="contact" required>
        </div>        
        <div class="field">
            <label>อีเมล์</label>
            <input type="email" name="email" required>
        </div>
        <div class="field">
            <label> เบอร์โทรศัพท์</label>
            <input type="number" name=" phone" maxlength="10" required>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>รายละเอียดเพิ่มเติม ภาษาไทย</label>
            <textarea name="desc_th" rows="3" required></textarea>
        </div>
        <div class="field">
            <label>รายละเอียดเพิ่มเติม ภาษาอังกฤษ</label>
            <textarea name="desc_en" rows="3" required></textarea>
        </div>
    </div>
    <div class="ui center aligned segment">            
        <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        <div class="ui red close button"><i class="close icon"></i> ปิด</div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function(){
        
    });
</script>