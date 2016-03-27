<form class="ui form horpak segment error validate" id="form-config"
      action="<?= site_url('horpak/savehorpak') ?>" method="post">        
    <div class="header">
        <h2>ลงทะเบียนหอพัก</h2>            
    </div>
    <div class="two fields">
        <div class="field">
            <label>ชื่อไทย</label>
            <input type="hidden" name="code_id" required>
            <input type="text" name="name_th" required>
        </div>
        <div class="field">
            <label>ชื่ออังฤษ</label>
            <input type="text" name="name_en" required>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>ที่อยู่ไทย</label>
            <textarea name="addr_th" required></textarea>
        </div>
        <div class="field">
            <label>ที่อังกฤษ</label>
            <textarea name="addr_en" required></textarea>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>Province</label>
            <select class="ui dropdown search selection" name="province" required>
                <option value="">Province</option>
                <?php foreach ($provinces as $index => $province) { ?>
                    <option value="<?= $province['province_id'] ?>"><?= $province['province_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="field">
            <label>state</label>
            <select class="ui dropdown" required name="state" aria-required="true" data-url='<?= site_url('address/getAmphur') ?>'></select>
            <input type="hidden" name="state"/>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>city</label>
            <select class="ui dropdown" name="city" required aria-required="true" data-url='<?= site_url('address/getCity') ?>'></select>
            <input type="hidden" name="city"/>
        </div>
        <div class="field">
            <label>zipcode</label>
            <input type="text" name="zipcode" required data-url='<?= site_url('address/getZipcode') ?>'>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>email</label>
            <input type="email" name="email" required>
        </div>
        <div class="field">
            <label> phone</label>
            <input type="number" name=" phone" maxlength="10" required>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label> contact</label>
            <input type="text" name="contact" required>
        </div>
        <div class="field">
            <label>join_date</label>
            <input type="text" name="join_date" required>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>desc_th</label>
            <textarea name="desc_th" required></textarea>
        </div>
        <div class="field">
            <label>desc_en</label>
            <textarea name="desc_en" required></textarea>
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