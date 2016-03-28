<form class="ui form horpak segment error validate modal" id="form-roomtype"
      data-url="<?= site_url('mroomtype/getroomtype') ?>"
      action="<?= site_url('mroomtype/saveroomtype') ?>" method="post">       
    <i class="close icon"></i>
    <div class="header">
        <h2>แบบฟอร์มจัดการข้อมูล ประเภทห้องพัก</h2>
    </div>
    <div class="content">
        <div class="two fields">
            <div class="field error">
            	<input type="hidden" name="code_id">
                <label>ชื่อประเภท</label>
                <input type="text" name="type_name" required>
            </div>
        </div>
        <div class="two fields">
            <div class="field error">
                <label>ราคาตั้งต้น (บาท)</label>
                <input type="number" name="std_price" required>
            </div>
        </div>
        <div class="field">
            <div class="field error">
                <label>รายละเอียด</label>
                <textarea name="type_desc" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="actions">            
        <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        <div class="ui red close button"><i class="close icon"></i> ปิด</div>
    </div>
</form>