<div class="ui grid">
    <div class="eight wide column">
        <h3>จัดการตั้งค่าหอพัก</h3>
    </div>
    <div class="eight wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="plus icon"></i> ข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_config'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table unstackable striped teal inverted">
            <thead>
                <tr>
                    <th>no</th>
                    <th>name_th</th>
                    <th>addr_th</th>
                    <th>contact</th>
                    <th>desc_th</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($horpaks as $key => $data) { ?>
                    <tr>
                        <td><?= ($key + 1) ?></td>
                        <td><?= $data['name_th'] ?></td>
                        <td>
                            <?= $data['addr_th'] ?> 
                            <i class="fa fa-rss button" data-html="
                               <p>จังหวัด <?= $data['province'] ?><p>
                               <p>อำเภอ <?= $data['state'] ?><p>
                               <p>ตำบล <?= $data['city'] ?><p>
                               <p>รหัสไปรษณีย์ <?= $data['zipcode'] ?><p>
                               "></i>
                        </td>
                        <td>
                            <?= $data['contact'] ?>
                            <i class="fa fa-rss button" data-html="
                               <p>Phone <?= $data['phone'] ?><p>
                               <p>Email <?= $data['email'] ?><p>
                               "></i>
                        </td>
                        <td><?= $data['desc_th'] ?></td>
                        <td class="center aligned">
                            <a class="ui small  labeled icon green button btn-form" data-id="<?= $data['code_id'] ?>">
                                <i class="pencil icon"></i> แก้ไข
                            </a>
                        </td>
                        <td  class="center aligned">
                            <a class="ui small labeled icon red button btn-delete" href="javascript:void(0)" 
                               data-url="<?= site_url('mconfig/deleteconfig/' . $data['code_id']) ?>">
                                <i class="remove icon"></i> ลบ
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>