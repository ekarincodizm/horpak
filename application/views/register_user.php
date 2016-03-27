<form class="ui form segment" name="form-register" method="post" action="<?= site_url('user/register') ?>">
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
    <div class="ui center aligned segment">            
        <button type="submit" class="ui green submit button"><i class="save icon"></i> บันทึก</button>
        <div class="ui red close button"><i class="close icon"></i> ปิด</div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $('form[name="form-register"]').submit(function (e) {
            e.preventDefault();
        }).validate({
            submitHandler: function (form) {
                $.ajax({
                    url: $(form).attr('action'),
                    data: $(form).serialize(),
                    dataType: 'json',
                    type: 'post',
                    success: function (resp) {
                        console.log(resp);
                        if (resp.status) {
                            window.location.href = resp.url;
                        }
                    },
                    error: function (err, xhrr, http) {
                        toastMessageError({title: 'Application Error', message: err.responseText});
                    }
                });
            }
        });

    });
</script>