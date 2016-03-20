<form class="ui form segment" name="form-register" method="post" action="<?= site_url('horpak/register') ?>">
    <div class="two fields">
        <div class="field">
            <label>First Name</label>
            <input type="hidden" name="code_id" >
            <input type="text" name="fname" required>
        </div>
        <div class="field">
            <label>Last Name</label>
            <input type="text" name="lname" required>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>Personal Id</label>
            <input type="text" name="id_card" required>
        </div>
        <div class="field">
            <label>BirthDay</label>
            <input type="text" name="birth_day" required>
        </div>
    </div>
    <div class="field">
        <div class="field">
            <label>Address</label>
            <textarea name="addr" required></textarea>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>Province</label>
            <select class="ui dropdown fluid search selection" name="province" required>
                <option value="">Province</option>
                <?php foreach ($provinces as $index => $province) { ?>
                    <option value="<?= $province['province_id'] ?>"><?= $province['province_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="field">
            <label>state</label>
            <select class="ui dropdown" required="" name="state" aria-required="true"></select>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>city</label>
            <select class="ui dropdown" name="city" required>
                <option value="">Gender</option>
                <option value="1">Male</option>
                <option value="0">Female</option>
            </select>
        </div>
        <div class="field">
            <label>zipcode</label>
            <input type="text" name="zipcode" required>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>email</label>
            <input type="email" name="email" required>
        </div>
        <div class="field">
            <label>mobile</label>
            <input type="number" name="mobile" required>
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label> avatar</label>
            <input type="text" name="avatar" required>
        </div>
        <div class="field">
            <label>horpak_id</label>
            <input type="text" name="horpak_id" required>
        </div>
    </div>
    <button type="submit" class="ui blue submit button">Submit</button>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $('form[name="form-register"]').submit(function (e) {
            e.preventDefault();
        }).validate({
            submitHandler: function (form) {
                console.log(form);
                form.submit();
            }
        });
        $('select[name="province"]').dropdown({
            onChange: function (value, text, $selectedItem) {
                var urlState = '<?= site_url('address/getAmphur') ?>';
                $.get(urlState, {provinceId: value}, function (resp) {
                    setDropdownOptions('select[name="state"]',resp);                    
                }, 'json');
            },
            placeholder: 'เลือก จังหวัด'
        });

        $('select[name="city"]').dropdown({
            onChange: function (value, text, $selectedItem) {
                console.log('value ::==' + value);
            }
        });

    });
</script>