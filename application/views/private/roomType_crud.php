<h1>Horpak Crud</h1>
<form name="roomType" method="POST">
    <div class="row">
        <div class="input-field col s6">
            <input value="Alvin" id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">First Name</label>
        </div>
        <div class="input-field col s6">
            <input value="Alvin" id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">First Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input value="Alvin" id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">First Name</label>
        </div>
        <div class="input-field col s6">
            <input value="Alvin" id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">First Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <a class="waves-effect waves-light btn btn-large">Save</a>
            <a class="waves-effect waves-light btn">Clear</a>
        </div>
    </div>   
</form>
<table class="bordered">
    <thead>
        <tr>
            <th>code_id</th>
            <th>name_th</th>
            <th>addr_th</th>
            <th>type_desc</th>
            <th>std_price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($roomtypes as $key => $data) { ?>
            <tr>
                <td><?= $data['code_id'] ?></td>
                <td><?= $data['horpak_id'] ?></td>
                <td><?= $data['type_name'] ?></td>
                <td><?= $data['type_desc'] ?></td>
                <td><?= $data['std_price'] ?></td>
                <td>
                    <button class="btn confirm" 
                            data-id="<?= $data['code_id'] ?>"
                            data-url="<?= site_url('backend/horpak') ?>"
                            >ลบ</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>



