<h1>Horpak Crud</h1>
<a href="<?= site_url('backend/horpak') ?>"  class="btn green accent-4">
    ข้อมูลใหม่
</a>
<button  type="button" class="btn light-blue accent-2" id="btnCloning">
    คัดลอกข้อมูล
</button>
<div class="chip orange lighten-2 boxProcessing" style="display: none">
    กำลังทำการคัดลอกข้อมูลอยู่
</div>
<form name="formHorpak" id="formHorpak" class="validate" method="POST" action="<?= site_url('backend/saveHorpak') ?>">
    <div class="row">
        <div class="input-field col s6">
            <input value="<?= $horpak->code_id ?>" id="code" name="code" type="hidden" class="validate">
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
    <div class="row">
        <div class="chip orange lighten-2 boxProcessing" style="display: none">
            กำลังทำการคัดลอกข้อมูลอยู่
        </div>
        <div class="input-field col s6">
            <button type="submit" class="waves-effect waves-light btn btn-large" id="btnSave">บันทึก</button>
            <button type="reset" class="waves-effect lime orange lighten-3 btn">ล้างค่า</button>
        </div>
    </div>   
</form>
<table class="bordered table">
    <thead>
        <tr>
            <th>code_id</th>
            <th>name_th</th>
            <th>addr_th</th>
            <th>phone</th>
            <th>email</th>
            <th>contact</th>
            <th>join_date</th>
            <th>#</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($horpaks as $key => $data) { ?>
            <tr>
                <td><?= $data['code_id'] ?></td>
                <td><?= $data['name_th'] ?></td>
                <td><?= $data['addr_th'] ?></td>
                <td><?= $data['phone'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['contact'] ?></td>
                <td><?= $data['join_date'] ?></td>
                <td>
                    <a href="<?= site_url('backend/horpak/' . $data['code_id']) ?>" class="btn light-blue lighten-2">
                        แก้ไขข้อมูล
                    </a>
                </td>
                <td>
                    <a href="<?= site_url('backend/deleteHorpak/' . $data['code_id']) ?>"
                       class="btn red accent-2" onclick="return confirm('ยืนยันการลบ')">
                        ลบข้อมูล
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function () {
        if ($('#code').val() == '') {
            $('#btnCloning').prop('disabled', true);
        } else {
            $('#btnCloning').prop('disabled', false);
        }
        $('#btnCloning').on('click', function () {
            $('.boxProcessing').css({'display': 'block'});
            $('#code').val('');
            $('#btnSave').text('บันทึกข้อมูลจากการคัดลอก');
        });
    });
</script>


