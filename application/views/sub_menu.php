<div class="ui grid">
    <div class="column">
        <div class="ui large breadcrumb">
            <a class="section" href="<?= site_url('horpak/index') ?>">หน้าแรก</a>
            <i class="right angle icon divider"></i>
            <div class="active section">หน้าข้อมูลหลัก</div>
        </div>
    </div>    
</div>
<div class="ui grid stackable four column">
    <?php foreach ($features as $key => $feature) { ?>
        <div class="column">
            <div class="ui cards">
                <div class="<?= $feature['color'] ?> card">
                    <div class="content center aligned segment">
                        <i class="fa <?= $feature['icon'] ?> fa-5x"></i>
                        <div class="header">
                            <?= $feature['name_th'] ?>
                        </div>                        
                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                            <div class="ui basic <?= $feature['color'] ?> button ui inverted segment">
                                <a href="<?= site_url($feature['href']) ?>"  style="color: #000000;font-weight: bold;">
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