<h1>Horpak Crud</h1>
<form name="horpak" method="POST">
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
            <th>phone</th>
            <th>email</th>
            <th>contact</th>
            <th>join_date</th>
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
            </tr>
        <?php } ?>
    </tbody>
</table>



