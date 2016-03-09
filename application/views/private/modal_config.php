<div class="ui modal" id="modal-form">
    <i class="close icon"></i>
    <form class="ui form segment error" id="form-config"
          data-url="<?= site_url('BackendJson/getConfig') ?>"
          action="<?= site_url('Backend/saveConfig') ?>" method="post">        
        <div class="header">
            <h2>M_Config</h2>
        </div>
        <div class="content">
            <div class="two fields">
                <div class="field error">
                    <label>horpak_id</label>
                    <input type="hidden" name="code_id">
                    <input type="text" name="horpak_id">
                </div>
                <div class="field error">
                    <label>tax_rate</label>
                    <input type="text" name="tax_rate">
                </div>
            </div>
            <div class="two fields">
                <div class="field error">
                    <label>elec_rate</label>
                    <input type="text" name="elec_rate">
                </div>
                <div class="field error">
                    <label>water_rate</label>
                    <input type="text" name="water_rate">
                </div>
            </div>
            <div class="two fields">
                <div class="field error">
                    <label>last_update</label>
                    <input type="text" name="last_update">
                </div>
                <div class="field error">
                    <label>update_by</label>
                    <input type="text" name="update_by">
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui red close button"><i class="close icon"></i> ปิด</div>
            <div class="ui positive submit button"><i class="save icon"></i> บันทึก</div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function () {
        $('#form-config .ui.form').form({
            inline: true,
            on: 'blur',
            onSuccess: function () {
                //THIS SHOULD DO SOMETHING :-(
                alert("TESTZ");
            },
            onError : function(){
                alert("TESTZ");
            },
            horpak_id: {
                identifier: 'horpak_id',
                rules: [{
                        type: 'empty',
                        prompt: 'Please enter a name'
                    }]
            },
        });
    });
</script>