<div class="ui modal" id="createAddress">
    <i class="close icon"></i>
    <div class="header">
        Adresses
    </div>
    <div class="content">
        <div class="ui form">
            <input id="token" type="hidden" value="">
            <div class="field">
                <label>Address</label>
                <input type="text" id="address">
            </div>
            <div class="two fields">
                <div class="field">
                    <label>Zip</label>
                    <input type="text" id="zip">
                </div>
                <div class="field">
                    <label>County</label>
                    <input type="text" id="county">
                </div>
            </div>
            <div class="field">
                <label>Country</label>
                <input type="text" id="country">
            </div>
            <div class="field">
                <label>Phone</label>
                <input type="text" id="phone">
            </div>
            <div class="field">
                <label>E-mail</label>
                <input type="text" id="email">
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui red cancel button">Cancel</div>
        <div class="ui positive button">Save</div>
    </div>
</div>
<!--<form name="formHorpak" id="formHorpak" class="validate" method="POST" action="<?= site_url('backend/saveHorpak') ?>">
    <div id="modalHorpak" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <div class="row">
                <div class="input-field col s6">
                    <input value="<?= $horpak->code_id ?>" id="code" name="code_id" type="hidden" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="<?= $horpak->name_th ?>" id="name_th" name="name_th" type="text" class="validate" required>
                    <label for="name_th">Name Thai</label>
                </div>
                <div class="input-field col s6">
                    <input value="<?= $horpak->name_en ?>" id="name_en" name="name_en" type="text" class="validate" required>
                    <label for="name_eng">Name Eng</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="<?= $horpak->addr_th ?>" id="addr_th" name="addr_th" type="text" class="validate" required>
                    <label for="addr_th">Address Thai</label>
                </div>
                <div class="input-field col s6">
                    <input value="<?= $horpak->addr_en ?>" id="addr_en" name="addr_en" type="text" class="validate" required>
                    <label for="addr_en">Address English</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l3">
                    <input value="<?= $horpak->city ?>" id="city" name="city" type="text" class="validate" required>
                    <label for="city">city </label>
                </div>
                <div class="input-field col l3">
                    <input value="<?= $horpak->state ?>" id="state" name="state" type="text" class="validate" required>
                    <label for="state">state</label>
                </div>
                <div class="input-field col l3">
                    <input value="<?= $horpak->province ?>" id="province" name="province" type="text" class="validate" required>
                    <label for="province">province </label>
                </div>
                <div class="input-field col l3">
                    <input value="<?= $horpak->zipcode ?>" id="zipcode" name="zipcode" type="text" class="validate" required>
                    <label for="zipcode">zipcode </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l3">
                    <input value="<?= $horpak->phone ?>" id="phone" name="phone" type="text" class="validate" required>
                    <label for="phone">phone  </label>
                </div>
                <div class="input-field col l3">
                    <input value="<?= $horpak->email ?>" id="email" name="email" type="text" class="validate" required>
                    <label for="email">email  </label>
                </div>
                <div class="input-field col l3">
                    <input value="<?= $horpak->contact ?>" id="contact" name="contact" type="text" class="validate" required>
                    <label for="contact">contact </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="<?= $horpak->desc_th ?>" id="desc_th" name="desc_th" type="text" class="validate" required>
                    <label for="desc_th">desc_th  </label>
                </div>
                <div class="input-field col s6">
                    <input value="<?= $horpak->desc_en ?>" id="desc_en" name="desc_en" type="text" class="validate" required>
                    <label for="desc_en">desc_en </label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="waves-effect waves-light btn modal-action" id="btnSave">บันทึก</button>
            <button type="reset" class="waves-effect lime orange lighten-3 btn modal-close">ล้างค่า</button>
        </div>
    </div>

</form>-->