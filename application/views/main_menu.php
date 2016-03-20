<div class="ui grid stackable four column container">
    <?php foreach ($features as $key => $feature) { ?>
        <div class="column">
            <div class="ui cards">
                <div class="<?=$feature['color']?> card ">
                    <div class="content center aligned segment">
                        <i class="fa <?=$feature['icon']?> fa-5x"></i>
                        <div class="header">
                            <?=$feature['name_th']?>
                        </div>                        
                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                            <div class="ui basic <?=$feature['color']?> button">
                                <a href="<?= site_url('/horpak/subMenu/' . $feature['alias']) ?>" style="color: #000000;font-weight: bold;">
                                    <h5><u><?= $feature['name_th'] ?></u></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    <?php } ?>
</div>
<div class="ui grid">
    <div class="sixteen wide column">
        <h4>จำนวนห้องพัก  20   ห้องว่าง  8  จอง  2  เข้าอยู่ 10  แจ้งออก 2</h4>
    </div>
</div>