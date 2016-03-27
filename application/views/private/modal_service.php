<form class="ui form horpak segment error validate modal" id="form-service"
      data-url="<?= site_url('mservice/getservice') ?>"
      action="<?= site_url('mservice/saveservice') ?>" method="post">        
    <i class="close icon"></i>
    <div class="header">
        <h2>บริการ</h2>
    </div>
    <div class="content">
        <div class="two fields">
            <div class="field error">
                <label>horpak_id</label>
                <input type="hidden" name="code_id">
                <select class="ui dropdown" name="horpak_id" required>
                    <option value="">--เลือก--</option>
                    <?php foreach ($horpaks as $index => $horpak) { ?>
                        <option value="<?= $horpak['code_id'] ?>"><?= $horpak['name_th'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="field error">
                <label>service_name</label>
                <input type="text" name="service_name" required>
            </div>
        </div>
        <div class="field">
            <div class="field error">
                <label>sercice_desc</label>
                <textarea name="sercice_desc"></textarea>
            </div>
        </div>
        <div class="two fields">
            <div class="field error">
                <label>price</label>
                <input type="number" name="price" required>
            </div>
            <div class="field error">
                <label>service_status</label>
                <select class="ui dropdown horpak" name="service_status" required>
                    <option value="">--เลือก--</option>
                    <?php foreach ($labels as $index => $label) { ?>
                        <option value="<?= $label['code_id'] ?>"><?= $label['c_label'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="actions">            
        <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        <div class="ui red close button"><i class="close icon"></i> ปิด</div>
    </div>
</form>