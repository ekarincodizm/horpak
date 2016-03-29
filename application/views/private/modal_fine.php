<form class="ui form horpak segment error validate modal" id="form-fine"
      data-url="<?= site_url('mfine/getfine') ?>"
      action="<?= site_url('mfine/savefine') ?>" method="post">        
    <i class="close icon"></i>
    <div class="header">
        <h2>ค่าใช้จ่ายเพิ่มเติม</h2>            
    </div>
    <div class="content">
        <div class="two fields">
            <div class="field error">
                <label>horpak_id</label>
                <input type="hidden" name="code_id">
                <input type="text" name="horpak_id" required>
            </div>
        </div>
        <div class="two fields">
            <div class="field error">
                <label>fine_name</label>
                <input type="text" name="fine_name" required>
            </div>
            <div class="field error">
                <label>fine_name</label>
                <input type="number" name="std_price" required>
            </div>
        </div>
        <div class="field">
            <div class="field error">
                <label>fine_desc</label>
                <textarea name="fine_desc"></textarea>
            </div>
        </div>
    </div>
    <div class="actions">            
        <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        <div class="ui red close button"><i class="close icon"></i> ปิด</div>
    </div>
</form>