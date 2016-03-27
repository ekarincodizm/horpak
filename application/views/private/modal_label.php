<form class="ui form horpak segment error validate modal" id="form-label"
      data-url="<?= site_url('mlabel/getlabel') ?>"
      action="<?= site_url('mlabel/savelabel') ?>" method="post">        
    <i class="close icon"></i>
    <div class="header">
        <h2>ป้ายชื่อ</h2>
    </div>
    <div class="content">
        <div class="two fields">
            <div class="field error">
                <label>c_group</label>
                <input type="hidden" name="code_id">
                <input type="text" name="c_group" required>
            </div>
            <div class="field error">
                <label>c_label_th</label>
                <input type="text" name="c_label" required>
            </div>
        </div>
        <div class="two fields">
            <div class="field error">
                <label>c_value</label>
                <input type="number" name="c_value" required>
            </div>
            <div class="field error">
                <label>order_by</label>
                <input type="number" name="order_by" required>
            </div>
        </div>
    </div>
    <div class="actions">            
        <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        <div class="ui red close button"><i class="close icon"></i> ปิด</div>
    </div>
</form>