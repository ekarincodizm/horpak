<form class="ui form horpak segment error validate modal" id="form-room"
      data-url="<?= site_url('mroom/getroom') ?>"
      action="<?= site_url('mroom/saveroom') ?>" method="post">        
    <i class="close icon"></i>
    <div class="header">
        <h2>ห้องพัก</h2>
    </div>
    <div class="content">
        <div class="two fields">
            <div class="field error">
                <label>horpak_id</label>
                <input type="hidden" name="code_id">
                <input type="text" name="horpak_id" required>
            </div>
            <div class="field error">
                <label>type_id</label>
                <input type="text" name="type_id" required>
            </div>
        </div>
        <div class="two fields">
            <div class="field error">
                <label>room_no</label>
                <input type="number" name="room_no" required>
            </div>
            <div class="field error">
                <label>floor</label>
                <input type="number" name="floor" required>
            </div>
        </div>
        <div class="two fields">
            <div class="field error">
                <label>price</label>
                <input type="number" name="price" required>
            </div>
            <div class="field error">
                <label>room_status</label>
                <input type="number" name="room_status" required>
            </div>
        </div>
        <div class="field">
            <div class="field error">
                <label>room_desc</label>
                <textarea name="room_desc"></textarea>
            </div>
        </div>
    </div>
    <div class="actions">            
        <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        <div class="ui red close button"><i class="close icon"></i> ปิด</div>
    </div>
</form>