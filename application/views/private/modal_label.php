<div class="ui modal" id="modal-form">
    <i class="close icon"></i>
    <form class="ui form segment error validate" id="form-config"
          data-url="<?= site_url('BackendJson/getLabel') ?>"
          action="<?= site_url('Backend/saveLabel') ?>" method="post">        
        <div class="header">
            <h2>M_Label</h2>
        </div>
        <div class="content">
            <div class="two fields">
                <div class="field error">
                    <label>c_group</label>
                    <input type="text" name="c_group" required>
                </div>                
            </div>
            <div class="two fields">
                <div class="field error">
                    <label>c_label</label>
                    <input type="text" name="c_label" required>
                </div>                
            </div>
            <div class="two fields">
                <div class="field error">
                    <label>c_value</label>
                    <input type="text" name="c_value" required>
                </div>
            </div>
            <div class="two fields">
                <div class="field error">
                    <label>order_by</label>
                    <input type="text" name="order_by" required>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui red close button"><i class="close icon"></i> ปิด</div>
            <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        </div>
    </form>
</div>