<form class="ui form horpak segment error validate" id="form-config"
      action="<?= site_url('horpak/savehorpak') ?>" method="post">    
    <div class="ui stackable one column grid">
        <div class="column">
            <h1>แจ้งเข้า</h1>
        </div>
    </div>
    <div class="ui stackable two column grid">
        <div class="column">
            <h3>เลือกห่้องว่าง</h3>
        </div>
        <div class="column">
            <div class="ui right aligned">
                <div class="ui search">
                    <div class="ui icon input">
                        <input class="prompt" placeholder="ค้นหา" type="text">
                        <i class="search icon"></i>
                    </div>
                    <div class="results"></div>
                </div>
            </div>            
        </div>
    </div>    
    <div class="ui stackable eight column grid">
        <?php foreach ($rooms as $key => $room) { ?>
            <div class="column">
                <div class="ui radio checkbox">
                    <input tabindex="<?= $key ?>" name="<?= $room['code_id'] ?>" type="radio">
                    <label><?= $room['room_no'] ?></label>
                </div>
            </div>
        <?php } ?>
    </div>  
    <div class="ui stackable one column grid">
        <div class="column">
            <div class="ui clearing">
                <h3 class="ui left floated">
                    กรอกข้อมูลลูกค้า
                    <div class="ui tiny orange button"><i class="plus icon"></i> เพิ่มใหม่</div>
                    <?php $this->load->view('/modal_customer'); ?>
                    <div class="ui tiny blue button search" onclick=""><i class="search icon"></i> ค้นหา</div>
                </h3>
            </div>
        </div>
    </div>   
</form>