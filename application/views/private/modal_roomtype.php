<form class="ui form horpak segment error validate modal" id="form-roomtype"
      data-url="<?= site_url('mroomtype/getroomtype') ?>"
      action="<?= site_url('mroomtype/saveroomtype') ?>" method="post">       
    <i class="close icon"></i>
    <div class="header">
        <h2>ประเภทห้องพัก</h2>
    </div>
    <div class="content">
        <div class="two fields">
            <div class="field error">
                <label>horpak_id</label>
                <input type="hidden" name="code_id">
                <input type="text" name="horpak_id" required>
            </div>
            <div class="field error">
                <label>type_name</label>
                <input type="text" name="type_name" required>
            </div>
        </div>
        <div class="two fields">
            <div class="field error">
                <label>std_price</label>
                <input type="text" name="std_price" required>
            </div>
        </div>
        <div class="field">
            <div class="field error">
                <label>type_desc</label>
                <textarea name="type_desc"></textarea>
            </div>
        </div>
    </div>
    <div class="actions">            
        <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        <div class="ui red close button"><i class="close icon"></i> ปิด</div>
    </div>
</form>