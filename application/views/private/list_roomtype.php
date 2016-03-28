<div class="ui grid">
    <div class="eight wide column">
        <h3>รายการประเภทห้องพัก</h3>
    </div>
    <div class="eight wide column">
        <a class="ui right floated small primary labeled icon button btn-form">
            <i class="plus icon"></i> เพิ่มข้อมูลใหม่
        </a>
    </div>
    <?php $this->load->view('/private/modal_roomtype'); ?>
    <div class="sixteen wide column">
        <table class="ui sortable celled table unstackable striped pink">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อประเภท</th>
                    <th>รายละเอียด</th>
                    <th>ราคาตั้งต้น</th>
                    <th class="center aligned">จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roomtypes as $key => $data) { ?>
                    <tr>
                        <td><?= ($key + 1) ?></td>
                        <td><?= $data['type_name'] ?></td>
                        <td><?= $data['type_desc'] ?></td>
                        <td><?= $data['std_price'] ?></td>
                        <td class="center aligned" width="30%">
<div class="ui small buttons">
  <a class="ui small  labeled icon green button btn-form" data-id="<?= $data['code_id'] ?>">
                                <i class="pencil icon"></i> แก้ไข
                            </a>
  <div class="or small" data-text="หรือ"></div>
<a class="ui small labeled icon orange button btn-delete" href="javascript:void(0)" 
                               data-url="<?= site_url('mroomtype/deleteroomtype/' . $data['code_id']) ?>">
                                <i class="remove icon"></i> ลบ
                            </a>  </div>                            
                                                    
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



