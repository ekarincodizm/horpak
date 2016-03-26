<div class="ui modal" id="modal-form">
    <i class="close icon"></i>
    <form class="ui form horpak segment error validate" id="form-config"
          data-url="<?= site_url('backendjson/getconfig') ?>"
          action="<?= site_url('backendjson/saveconfig') ?>" method="post">        
        <div class="header">
            <h2>M_Config</h2>
        </div>
        <div class="content">
            <div class="two fields">
                <div class="field error">
                    <label>horpak_id</label>
                    <input type="hidden" name="code_id">
                    <input type="text" name="horpak_id" required>
                </div>
                <div class="field error">
                    <label>tax_rate</label>
                    <input type="text" name="tax_rate" required>
                </div>
            </div>
            <div class="two fields">
                <div class="field error">
                    <label>elec_rate</label>
                    <input type="text" name="elec_rate" required>
                </div>
                <div class="field error">
                    <label>water_rate</label>
                    <input type="text" name="water_rate" required>
                </div>
            </div>
            <div class="two fields">
                <div class="field error">
                    <label>last_update</label>
                    <input type="text" name="last_update" required>
                </div>
                <div class="field error">
                    <label>update_by</label>
                    <input type="text" name="update_by" required>
                </div>
            </div>
        </div>
        <div class="actions">            
            <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
            <div class="ui red close button"><i class="close icon"></i> ปิด</div>
        </div>
    </form>
</div>